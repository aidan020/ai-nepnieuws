const cards = document.querySelectorAll('.article-card');
const buttons = document.querySelectorAll('.filter-btn');

buttons.forEach(btn => {
  btn.addEventListener('click', () => {
    buttons.forEach(b => b.classList.remove('active'));
    btn.classList.add('active');

    const filter = btn.dataset.filter;

    cards.forEach(card => {
      if (filter === 'alle' || card.dataset.category === filter) {
        card.style.display = 'flex';
      } else {
        card.style.display = 'none';
      }
    });
  });
});
let score = 0;
let answered = 0;

function startQuiz() {
  document.getElementById('quiz-container').style.display = 'block';
  document.querySelector('.section').style.display = 'none';
}

function checkAnswer(questionNum, isCorrect) {
  const feedback = document.getElementById('feedback-' + questionNum);
  feedback.style.display = 'block';
  
  if (isCorrect) {
    score++;
    feedback.style.borderLeftColor = '#27ae60';
    feedback.innerHTML = feedback.innerHTML.replace('<strong>Goed!</strong>', '<strong>Goed!</strong>');
  }
  
  const buttons = feedback.previousElementSibling.querySelectorAll('button');
  buttons.forEach(btn => {
    btn.disabled = true;
    btn.style.opacity = '0.5';
    btn.style.cursor = 'default';
  });
  
  answered++;
  
  if (answered === 5) {
    setTimeout(() => {
      document.getElementById('result').style.display = 'block';
      document.getElementById('result').scrollIntoView({ behavior: 'smooth' });
      
      const resultTitle = document.getElementById('result-score');
      const resultText = document.getElementById('result-text');
      
      resultTitle.textContent = score + ' / 5';
      
      if (score === 5) {
        resultText.textContent = 'Uitstekend! Je herkent AI-nepnieuws feilloos.';
      } else if (score >= 3) {
        resultText.textContent = 'Goed gedaan! Blijf oefenen.';
      } else {
        resultText.textContent = 'Bekijk de vergelijking pagina voor meer voorbeelden.';
      }
    }, 500);
  }
}
