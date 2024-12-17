import { registerBlockType } from '@wordpress/blocks';
import { useBlockProps, RichText, InspectorControls, InnerBlocks, BlockControls, AlignmentToolbar } from '@wordpress/block-editor';
import { PanelBody, Button, TextControl } from '@wordpress/components';
import { useState } from '@wordpress/element';

registerBlockType('myplugin/tabbed-content', {
    title: 'Tabbed Content',
    icon: 'index-card',
    category: 'common',
    attributes: {
        tabs: {
            type: 'array',
            default: [{ title: 'Tab 1', content: '' }],
        },
    },
    edit: ({ attributes, setAttributes }) => {
        const { tabs, alignment } = attributes;
        const [activeTab, setActiveTab] = useState(0);

        const blockProps = useBlockProps();

        const updateTab = (index, key, value) => {
            const updatedTabs = [...tabs];
            updatedTabs[index][key] = value;
            setAttributes({ tabs: updatedTabs });
        };

        const addTab = () => {
            setAttributes({
                tabs: [...tabs, { title: `Tab ${tabs.length + 1}`, content: '' }],
            });
        };

        const removeTab = (index) => {
            const updatedTabs = tabs.filter((_, i) => i !== index);
            setAttributes({ tabs: updatedTabs });
        };

        return (
            <div {...blockProps}>
                <BlockControls>
                    <AlignmentToolbar
                        value={alignment}
                        onChange={(newAlignment) =>
                            setAttributes({ alignment: newAlignment || 'none' })
                        }
                    />
                </BlockControls>
                <InspectorControls>
                    <PanelBody title="Tab Settings">
                        <Button isPrimary onClick={addTab}>
                            Add Tab
                        </Button>
                    </PanelBody>
                </InspectorControls>
                <div className="tabbed-content-editor">
                    <div className="tab-titles">
                        {tabs.map((tab, index) => (
                            <div key={index}>
                                <TextControl
                                    label={`Tab ${index + 1} Title`}
                                    value={tab.title}
                                    onChange={(value) => updateTab(index, 'title', value)}
                                />
                                <Button
                                    isDestructive
                                    onClick={() => removeTab(index)}
                                    disabled={tabs.length <= 1}
                                >
                                    Remove Tab
                                </Button>
                            </div>
                        ))}
                    </div>
                    <div className="tab-content">
                        {tabs.map((tab, index) => (
                            <div key={index}>
                                <label htmlFor={`tab-content-${index}`}>
                                Content for Tab {index + 1}
                                </label>
                                <RichText
                                    tagName="p"
                                    className="rich-text-bordered"
                                    label={`Content for Tab ${index + 1}`}
                                    value={tab.content}
                                    placeholder="Enter tab content..."
                                    onChange={(value) => updateTab(index, 'content', value)}
                                />
                            </div>
                        ))}
                    </div>
                </div>
            </div>
        );
    },
    save: ({ attributes }) => {
        const { tabs, alignment } = attributes;
    
        const blockProps = useBlockProps.save({
            className: `align-${alignment}`, // Add alignment class
        });

    
        return (
            <div {...blockProps}>
                <div className="tabbed-content">
                    <ul className="tab-titles">
                        {tabs.map((tab, index) => (
                            <li
                                key={index}
                                className={index === 0 ? 'active' : ''}
                                data-tab={index}
                            >
                                {tab.title}
                            </li>
                        ))}
                    </ul>
                    <div className="tab-content">
                        {tabs.map((tab, index) => (
                            <div
                                key={index}
                                className={`tab-pane ${index === 0 ? 'active' : ''}`}
                                data-tab={index}
                            >
                                {tab.content}
                            </div>
                        ))}
                    </div>
                </div>
            </div>
        );
    },    
});

registerBlockType('myplugin/my-custom-block', {
    title: 'My Custom Block',
    icon: 'smiley',
    category: 'common',
    edit: () => {
        const blockProps = useBlockProps();
        return (
            <div {...blockProps}>
                <p>Edit your custom block here!</p>
            </div>
        );
    },
    save: () => {
        const blockProps = useBlockProps.save();
        return (
            <div {...blockProps}>
                <p>My Custom Block Content!</p>
            </div>
        );
    },
});
