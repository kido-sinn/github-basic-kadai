const btn = document.getElementById('btn');
const text =document.getElementById('text');

btn.addEventListener('click', () => {
  document.getElementById('text').textContent = 'ボタンをクリックしました';
});