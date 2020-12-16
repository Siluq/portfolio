class Calculator {
  constructor(previousOperandTextElement, currentOperandTextElement) {
    this.previousOperandTextElement = previousOperandTextElement
    this.currentOperandTextElement = currentOperandTextElement
    this.clear()
  }

  clear() {
    this.currentOperand = ''
    this.previousOperand = ''
    this.operation = undefined
  }

  delete() {
    this.currentOperand = this.currentOperand.toString().slice(0, -1)
  }

  appendNumber(number) {
    if (number === '.' && this.currentOperand.includes('.')) return
    this.currentOperand = this.currentOperand.toString() + number.toString()
  }

  chooseOperation(operation) {
    if (this.currentOperand === '') return
    if (this.previousOperand !== '') {
      this.compute()
    }
    this.operation = operation
    this.previousOperand = this.currentOperand
    this.currentOperand = ''
  }

  compute() {
    let computation
    const prev = parseFloat(this.previousOperand)
    const current = parseFloat(this.currentOperand)
    if (isNaN(prev) || isNaN(current)) return
    switch (this.operation) {
      case '+':
        computation = prev + current
        break
      case '-':
        computation = prev - current
        break
      case '*':
        computation = prev * current
        break
      case 'x':
        computation = prev * current
        break
      case '/':
        computation = prev / current
        break
      case '÷':
        computation = prev / current
        break
      default:
        return
    }
    this.currentOperand = computation
    this.operation = undefined
    this.previousOperand = ''
  }

  getDisplayNumber(number) {
    const stringNumber = number.toString()
    const integerDigits = parseFloat(stringNumber.split('.')[0])
    const decimalDigits = stringNumber.split('.')[1]
    let integerDisplay
    if (isNaN(integerDigits)) {
      integerDisplay = ''
    } else {
      integerDisplay = integerDigits.toLocaleString('en', {
        maximumFractionDigits: 0
      })
    }
    if (decimalDigits != null) {
      return `${integerDisplay}.${decimalDigits}`
    } else {
      return integerDisplay
    }
  }

  updateDisplay() {
    this.currentOperandTextElement.innerText =
      this.getDisplayNumber(this.currentOperand)
    if (this.operation != null) {
      this.previousOperandTextElement.innerText =
        `${this.getDisplayNumber(this.previousOperand)} ${this.operation}`
    } else {
      this.previousOperandTextElement.innerText = ''
    }
  }

  updateDisplay() {
    this.currentOperandTextElement.innerText =
      switchDotsAndCommas(this.getDisplayNumber(this.currentOperand));
    if (this.operation != null) {
      this.previousOperandTextElement.innerText =
        switchDotsAndCommas(`${this.getDisplayNumber(this.previousOperand)} ${this.operation}`);
    } else {
      this.previousOperandTextElement.innerText = ''
    }
  }
}

function switchDotsAndCommas(input) {
  // in de string input willen we alle komma's naar punt veranderen en andersom
  var output = input.replace(/[.]/g, "_");
  output = output.replace(/[,]/g, ".");
  output = output.replace(/[_]/g, ",");
  return output;
}


const numberButtons = document.querySelectorAll('[data-number]')
const operationButtons = document.querySelectorAll('[data-operation]')
const equalsButton = document.querySelector('[data-equals]')
const deleteButton = document.querySelector('[data-delete]')
const allClearButton = document.querySelector('[data-all-clear]')
const previousOperandTextElement = document.querySelector('[data-previous-operand]')
const currentOperandTextElement = document.querySelector('[data-current-operand]')

const calculator = new Calculator(previousOperandTextElement, currentOperandTextElement)

numberButtons.forEach(button => {
  button.addEventListener('click', () => {
    var audio = new Audio('click.mp3');
    audio.play();
    calculator.appendNumber(button.innerText)
    calculator.updateDisplay()
  })
})

operationButtons.forEach(button => {
  button.addEventListener('click', () => {
    var audio = new Audio('coin.mp3');
    audio.play();
    calculator.chooseOperation(button.innerText)
    calculator.updateDisplay()
  })
})

equalsButton.addEventListener('click', button => {
  var audio = new Audio('done.mp3');
  audio.play();
  calculator.compute()
  calculator.updateDisplay()
})

allClearButton.addEventListener('click', button => {
  var audio = new Audio('dead.mp3');
  audio.play();
  calculator.clear()
  calculator.updateDisplay()
})

deleteButton.addEventListener('click', button => {
  var audio = new Audio('drop.mp3');
  audio.play();
  calculator.delete()
  calculator.updateDisplay()
})

/* toetsenboard dingnen*/
document.onkeydown = function (e) {
  var inputs = document.getElementsByClassName('button')
  var text = e.key
  for (let i = 0; i < inputs.length; i++) {
    const a = inputs[i];
    if (["*", "x", "/", "÷", "+", "-"].includes(text)) {
      var audio = new Audio('coin.mp3');
      audio.play();
      calculator.chooseOperation(text)
      calculator.updateDisplay()
      break;
    } else if (a.innerText == text) {
      var audio = new Audio('click.mp3');
      audio.play();
      calculator.appendNumber(text)
      calculator.updateDisplay()
      break;
    } else if (text == "Enter") {
      var audio = new Audio('done.mp3');
      audio.play();
      calculator.compute()
      calculator.updateDisplay()
      break;
    } else if (text == "=") {
      var audio = new Audio('done.mp3');
      audio.play();
      calculator.compute()
      calculator.updateDisplay()
      break;
    } else if (text == "Escape") {
      var audio = new Audio('dead.mp3');
      audio.play();
      calculator.clear()
      calculator.updateDisplay()
      break;
    } else if (text == "Backspace") {
      var audio = new Audio('drop.mp3');
      audio.play();
      calculator.delete()
      calculator.updateDisplay()
      break;
    }
  }
}