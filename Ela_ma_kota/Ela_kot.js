console.log("Main start");

const convertLetterToNumberValue = (letter) => {
    if (letter == ' ') {
        return 0
    } if (letter == 'e') {
        return 33
    } if (letter == 'l') {
        return 555
    } if (letter == 'a') {
        return 2
    } if (letter == 'n') {
        return 66
    } if (letter == 'i') {
        return 444
    } if (letter == 'm') {
        return 6
    } if (letter == 'k') {
        return 55
    }if (letter == 'o') {
        return 666
    } if (letter == 't') {
        return 8
    }
    else {
        return null
    }
};

const convertNumberValueToLetter = (numberValue) => {
    if (numberValue == 0) {
        return ' '
    } if (numberValue == 5) {
        return 'j'
    }  if (numberValue == 22) {
        return 'b'
    } if (numberValue == 2) {
        return 'a'
    }  if (numberValue == 555) {
        return 'l'
    }  if (numberValue == 33) {
        return 'e'
    }  if (numberValue == 222) {
        return 'c'
    } if (numberValue == 9999) {
        return 'z'
    } if (numberValue == 66) {
        return 'n'
    }  if (numberValue == 444) {
        return 'i'
    }  else if (numberValue == 55) {
        return 'k'
    } else {
        return null
    }
};


const convertToNumeric = (text) => {
    const letters = text.toLowerCase().split('')
    const result = []

    for (let i = 0; i < letters.length; i++) {
        const letter = letters[i];

        const numberValue = convertLetterToNumberValue(letter);
        result.push(numberValue)
    }

    return result
};

numericResult = convertToNumeric('Ela nie ma kota'); 
console.log('numericResult', numericResult)


const convertToString = (numberArray) => {

    const result = []

    for (let i = 0; i < numberArray.length; i++) {
        const numberValue = numberArray[i];

        const letter = convertNumberValueToLetter(numberValue);

        result.push(letter);
    }

    return result.join('')
}

stringResult = convertToString([5,2,22,555,33,222,9999,66,444,55])
console.log('stringResult', stringResult)