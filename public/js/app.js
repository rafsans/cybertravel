const listSearch = document.querySelectorAll('.search-tab');
const listItem = document.querySelectorAll('.list-item');

listSearch.forEach(item => {
    item.addEventListener('click', () => {
        listSearch.forEach(otherItem => otherItem.classList.remove('active'));

        // Add active class to the clicked item
        item.classList.add('active');
    });
});

listItem.forEach(item => {
    item.addEventListener('click', () => {
        listItem.forEach(otherItem => otherItem.classList.remove('item-active'));

        // Add active class to the clicked item
        item.classList.add('item-active');
    });
});