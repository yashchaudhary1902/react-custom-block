document.addEventListener('DOMContentLoaded', () => {
    const tabbedContents = document.querySelectorAll('.tabbed-content');

    tabbedContents.forEach((tabbedContent) => {
        const tabTitles = tabbedContent.querySelectorAll('.tab-titles li');
        const tabPanes = tabbedContent.querySelectorAll('.tab-pane');

        tabTitles.forEach((title, index) => {
            title.addEventListener('click', () => {
                // Remove active class from all tabs
                tabTitles.forEach((t) => t.classList.remove('active'));
                tabPanes.forEach((pane) => pane.classList.remove('active'));

                // Add active class to the selected tab and pane
                title.classList.add('active');
                tabPanes[index].classList.add('active');
            });
        });
    });
});
