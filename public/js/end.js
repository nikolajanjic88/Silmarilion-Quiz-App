const saveScoreBtn = document.getElementById('saveScoreBtn');
const finalScore = document.getElementById('finalScore');
const mostRecentScore = localStorage.getItem('mostRecentScore');
const scoreInput = document.getElementById('finalScoreInput');
scoreInput.value = localStorage.getItem('mostRecentScore');
console.log(scoreInput.value);

const highScores = JSON.parse(localStorage.getItem('highScores')) || [];

finalScore.innerText = `Your score - ${mostRecentScore}`;

// Define the data to be inserted
const data = {
  score: scoreInput.value
};

// Define the URL of your PHP API endpoint
const apiUrl = '/questions'; 

saveScoreBtn.addEventListener('click', (e) => {
  e.preventDefault();

  fetch(apiUrl, {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify(data)
  })
    .then(response => response.json())
    .then(result => {
      window.location.assign('/menu');
      console.log(result.message);
    })
    .catch(error => {
      console.error('Error:', error);
    });
})
