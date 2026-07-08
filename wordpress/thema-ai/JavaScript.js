const quiz = [
  {
    source: "GezondNieuws.nl | 2026",
    title: "Revolutionair medicijn geneest diabetes in 2 weken",
    text: "Wetenschappers claimen dat een nieuw medicijn diabetes type 2 volledig geneest. Farmaceuten zouden dit geheim houden.",
    fake: true,
    explanation: "Dit is nepnieuws. Onrealistische claim en complottheorie."
  },
  {
    source: "NU.nl | 2026",
    title: "Kabinet presenteert nieuw klimaatbeleid",
    text: "Na maanden overleg presenteert het kabinet nieuwe klimaatmaatregelen.",
    fake: false,
    explanation: "Dit is echt nieuws. Neutrale toon en betrouwbare bron."
  },
  {
    source: "@PolitiekAlert",
    title: "EXCLUSIEF: Minister bekende alles",
    text: "Deel dit NU! Dit bewijst dat de overheid jarenlang heeft gelogen.",
    fake: true,
    explanation: "Nepnieuws gebruikt vaak emotionele taal en geen bronnen."
  },
  {
    source: "NOS | 2026",
    title: "Nieuwe pandemiewet besproken in Tweede Kamer",
    text: "De Tweede Kamer bespreekt nieuwe maatregelen. Experts zijn verdeeld.",
    fake: false,
    explanation: "Echt nieuws bevat meestal nuance en meerdere standpunten."
  },
  {
    source: "WetenschapDaily.com",
    title: "SHOCKING: Vaccins werken helemaal niet meer",
    text: "De overheid zou dit verbergen voor de bevolking.",
    fake: true,
    explanation: "Alarmistische taal en complottheorie zijn typische kenmerken van nepnieuws."
  }
];

let current = 0;
let score = 0;

function startQuiz() {
  document.getElementById("start-screen").style.display = "none";
  document.getElementById("quiz-container").style.display = "block";
  showQuestion();
}

function showQuestion() {
  const q = quiz[current];
  document.getElementById("question-number").textContent = current + 1;
  document.getElementById("question-source").textContent = q.source;
  document.getElementById("question-title").textContent = q.title;
  document.getElementById("question-text").textContent = q.text;
  document.getElementById("feedback").style.display = "none";
  document.getElementById("next-btn").style.display = "none";
}

function answer(choice) {
  const q = quiz[current];
  const feedback = document.getElementById("feedback");
  feedback.style.display = "block";

  if (choice === q.fake) {
    score++;
    feedback.style.borderLeftColor = "#27ae60";
    feedback.innerHTML = "<strong>Goed!</strong><br>" + q.explanation;
  } else {
    feedback.style.borderLeftColor = "#e74c3c";
    feedback.innerHTML = "<strong>Fout.</strong><br>" + q.explanation;
  }

  document.getElementById("next-btn").style.display = "inline-block";
}

function nextQuestion() {
  current++;
  if (current < quiz.length) {
    showQuestion();
  } else {
    showResult();
  }
}

function showResult() {
  document.querySelector("#quiz-container .info-card").style.display = "none";
  const result = document.getElementById("result");
  result.style.display = "block";
  document.getElementById("result-score").textContent = score + " / 5";

  if (score === 5) {
    document.getElementById("result-text").textContent = "Perfect! Je herkent AI-nepnieuws uitstekend.";
  } else if (score >= 3) {
    document.getElementById("result-text").textContent = "Goed gedaan! Je kunt nepnieuws vaak herkennen.";
  } else {
    document.getElementById("result-text").textContent = "Blijf kritisch en controleer altijd je bronnen.";
  }
}

document.addEventListener("DOMContentLoaded", function () {
  const filterBtns = document.querySelectorAll(".filter-btn");
  const articleCards = document.querySelectorAll(".article-card");

  filterBtns.forEach(function (btn) {
    btn.addEventListener("click", function () {
      filterBtns.forEach(function (b) {
        b.classList.remove("active");
      });
      btn.classList.add("active");

      const filter = btn.getAttribute("data-filter");

      articleCards.forEach(function (card) {
        if (filter === "alle" || card.getAttribute("data-category") === filter) {
          card.style.display = "block";
        } else {
          card.style.display = "none";
        }
      });
    });
  });
});
