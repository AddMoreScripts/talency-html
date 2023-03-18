export const startAccordeons = () => {
  const testEl = document.querySelector('[data-hidebox]');
  if (!testEl) return;
  document.addEventListener('click', (e) => {
    const accordLink = e.target.closest('[data-hideopen]');
    if (!accordLink) return;
    e.preventDefault();
    const accordWrap = document.querySelector(`[data-hidewrap="${accordLink.dataset.hideopen}"]`);
    const accordBox = document.querySelector(`[data-hidebox="${accordLink.dataset.hideopen}"]`);
    if (!accordBox) return;

    if (accordWrap.classList.contains('is-opened')) {
      accordBox.style.height = `${accordBox.scrollHeight}px`;
      accordWrap.classList.remove('is-opened');
      accordLink.classList.remove('is-opened');
      setTimeout(() => {
        accordBox.style.height = '';
      }, 0);
      return;
    }
    accordBox.style.height = 0;
    accordWrap.classList.add('is-opened');
    accordLink.classList.add('is-opened');
    setTimeout(() => {
      accordBox.style.height = `${accordBox.scrollHeight}px`;
    }, 0);
    setTimeout(() => {
      accordBox.style.height = ``;
    }, 1000);
  });
};
