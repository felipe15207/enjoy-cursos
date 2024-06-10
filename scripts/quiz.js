const $startGameButton = document.querySelector(".start-quiz")
const $nextQuestionButton = document.querySelector(".next-question")
const $questionsContainer = document.querySelector(".questions-container")
const $questionText = document.querySelector(".question")
const $answersContainer = document.querySelector(".answers-container")
const $answers = document.querySelectorAll(".answer")

let currentQuestionIndex = 0
let totalCorrect = 0

$startGameButton.addEventListener("click", startGame)
$nextQuestionButton.addEventListener("click", displayNextQuestion)

function startGame() {
  $startGameButton.classList.add("hide")
  $questionsContainer.classList.remove("hide")
  displayNextQuestion()
}

function displayNextQuestion() {
  resetState()
  
  if (questions.length === currentQuestionIndex) {
    return finishGame()
  }

  $questionText.textContent = questions[currentQuestionIndex].question
  questions[currentQuestionIndex].answers.forEach(answer => {
    const newAsnwer = document.createElement("button")
    newAsnwer.classList.add("button", "answer")
    newAsnwer.textContent = answer.text
    if (answer.correct) {
      newAsnwer.dataset.correct = answer.correct
    }
    $answersContainer.appendChild(newAsnwer)

    newAsnwer.addEventListener("click", selectAnswer)
  })
}

function resetState() {
  while($answersContainer.firstChild) {
    $answersContainer.removeChild($answersContainer.firstChild)
  }

  document.body.removeAttribute("class")
  $nextQuestionButton.classList.add("hide")
}

function selectAnswer(event) {
  const answerClicked = event.target

  if (answerClicked.dataset.correct) {
    document.body.classList.add("correct")
    totalCorrect++
  } else {
    document.body.classList.add("incorrect") 
  }

  document.querySelectorAll(".answer").forEach(button => {
    button.disabled = true

    if (button.dataset.correct) {
      button.classList.add("correct")
    } else {
      button.classList.add("incorrect")
    }
  })
  
  $nextQuestionButton.classList.remove("hide")
  currentQuestionIndex++
}

function finishGame() {
  const totalQuestions = questions.length
  const performance = Math.floor(totalCorrect * 100 / totalQuestions)
  
  let message = ""

  switch (true) {
    case (performance >= 90):
        window.location.href = "certificado.php";
      break
    case (performance >= 70):
      window.location.href = "certificado.php";

      break
    case (performance >= 50):
      message = "Bom"
      break
    default:
      message = "Pode melhorar :("
  }

  $questionsContainer.innerHTML = 
  `
    <p class="final-message">
      Você acertou ${totalCorrect} de ${totalQuestions} questões!
      <span>Resultado: ${message}</span>
    </p>
    <button 
      onclick=window.location.reload() 
      class="button"
    >
      Refazer teste
    </button>
  `
}


const questions = [
  {
    question: "Dentro de qual elemento HTML colocamos o JavaScript?",
    answers: [
      { text: "<javascript>", correct: false },
      { text: "<js>", correct: false },
      { text: "<script>", correct: true },
      { text: "<scripting>", correct: false }
    ]
  },
  {
    question: "Qual é a propriedade CSS usada para adicionar espaço dentro de um elemento?",
    answers: [
      { text: "Padding", correct: true },
      { text: "Margin", correct: false },
      { text: "Border", correct: false },
      { text: "Spacing", correct: false }
    ]
  },
  {
    question: 'Qual é a tag HTML usada para criar uma lista não ordenada?',
    answers: [
      { text: '<ul>', correct: true },
      { text: '<li>', correct: false },
      { text: '<ol>', correct: false },
      { text: "Nenhuma das alternativas", correct: false }
    ]
  },
  {
    question: 'Em HTML, a tag <a> é usada exclusivamente para criar links externos para outros sites.',
    answers: [
      { text: "Verdadeiro", correct: false },
      { text: "Falso", correct: true }
    ]
  },
  {
    question: 'Qual atributo HTML é usado para especificar a URL de destino de um link?',
    answers: [
      { text: 'src', correct: false },
      { text: 'href', correct: true },
      { text: 'url', correct: false },
      { text: 'link', correct: false }
    ]
  },
  {
    question: 'Qual é a propriedade CSS usada para definir a cor do texto?',
    answers: [
      { text: 'font-color', correct: false },
      { text: 'color', correct: true },
      { text: 'text-color', correct: false },
      { text: 'text-style', correct: false }
    ]
  },
  {
    question: 'Como você seleciona um elemento com o id "meu-id" no CSS?',
    answers: [
      { text: 'meu-id', correct: false },
      { text: '*meu-id', correct: false },
      { text: '.meu-id', correct: false },
      { text: '#meu-id', correct: true },
    ]
  },
]