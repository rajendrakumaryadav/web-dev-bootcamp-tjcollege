let number = 10e4;
console.log(number)

let n1 = 1
let f1 = 1.2
let e1 = 1.7873727162361828e+308

console.log(n1, f1, e1)

let s1 = "Hello, World"
let s2 = 'Hello, World'

console.log(typeof s1, typeof s2)

let es1 = 'Hello,  Wor\rld'
console.log(es1)

console.log(1 + 2)
console.log("do" + "g".toUpperCase())

function hello(name) {
    return "Hello, " + name
    // return message
}

let xyz, s
xyz = hello("Rajendra")
s = 1
console.log(xyz, s)

let x = NaN

if (s <= 12) {
    console.log("In True Area", s <= 12)
} else {
    console.log(s < 12)
}

switch (s) {
    case 1:
        console.log(s)
        break
    case 2:
        console.log(s)
        break
    case 12:
        console.log('Matched ' + s)
        break
    default:
        console.log("No match found!")
        break
}
console.log("Out of switch block")

let array = []
let p = 0
console.info("In while loop")
while (p < array.length) {
    console.log(array[p])
    p = p + 1
}
console.info("In for loop")
for (let x = 0; x < array.length; x++) {
    console.log(array[x])
}
console.info("In for-in loop")
for (let x in array) {
    console.log(array[x])
}

let a = 0

console.info("In do-while loop")
do {
    console.log(array[a])
    a += 1
} while (a < array.length);


// BODMOS
// Infix - top operator precedence [ *, / , %]
console.log((10 * 2) / 2 % 2)

// +, -

console.log((10 / 5) - 5 + (5 * 2))

// >=, <=, >, <

console.log(10 + 5 < 20 !== false)      // true is converted as 1, 10 + 1 = 11

// logical operators  || , &&
// true || true = true   , true && true = true
// true || false = true  , all others case are false
// false || true = true
// false || false = false

console.log( `'Logical Test [AND]' : ${10 + 20 < 20 && true}`)
console.log(`'Logical Test [AND]' : ${10 + 20 > 20 && true}`)

console.log( `'Logical Test [OR]' : ${10 + 20 < 20 || true}`)
console.log(`'Logical Test [OR]' : ${10 + 20 > 20 || true}`)
console.log(`'Logical Test [OR]' : ${10 + 20 < 20 || false}`)



