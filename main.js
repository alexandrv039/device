let popupMenuIsOpen = false;
let basketPopupIsOpen = false;

let catalogMenuElement = document.querySelector('.catalog-menu-link');
let basketButtonElement = document.querySelector('.basket-section');

catalogMenuElement.addEventListener('click', () => {
  if (popupMenuIsOpen) {
    catalogMenuElement.className = 'catalog-menu-link catalog-menu-link-close';
  } else {
    catalogMenuElement.className = 'catalog-menu-link';
  }
  popupMenuIsOpen = !popupMenuIsOpen;
});

basketButtonElement.addEventListener('click', () => {
  basketPopupIsOpen = !basketPopupIsOpen;
  if (basketPopupIsOpen) {
    basketButtonElement.className = 'basket-section show-basket-content';
  } else {
    basketButtonElement.className = 'basket-section';
  }
});
