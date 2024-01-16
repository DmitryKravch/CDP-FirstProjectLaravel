const title = document.querySelector('.position_block > h1');
const subtitle = document.querySelector('.position_block > h2');
const articleContent = document.querySelector('.article_content');

title.addEventListener('click', () => {
    articleContent.style.filter = 'invert(1)'
})
subtitle.addEventListener('click', () => {
    articleContent.style.filter = 'invert(0)'
})
