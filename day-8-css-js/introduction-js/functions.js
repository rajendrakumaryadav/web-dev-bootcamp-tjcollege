function greet(firstName, lastName) {
    if ((typeof firstName === undefined) && (typeof lastName === undefined)) {
        return "Hello, World!"
    }
    return `Hello, ${firstName} ${lastName}!`
}

const add = function(num1, num2) {
    return num1 + num2
}

let x = greet('Rajendra Kumar R', 'Yadav') + "\nThanks for being with me."
console.log(x)

console.log(add(1, 2))
