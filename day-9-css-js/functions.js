let add = function (x, y) {
    return x + y
}

add.x = "value in x"

console.log(add(10, 20), add.x)

const add1 = function (x, y) {
    return x + y
}

add1.x = "value in x"

console.log(add1)

function add2(x, y) {
    return x + y
}

add2.x = "Value in X"

console.log(add2(10, 20), add2)

let sum = add2(100, 20)

console.log(sum)


let x = {
    "name": "Name", "age": 27, "getAge": function () {
        return this.age
    }, "toString": function () {
        return `Name : ${this.name}, Age: ${this.age}`
    }
}

console.log(x.toString())

function multiplication(x, y) {
    return (x * y)
}


console.log(`10 * 10 = ${multiplication(10, 10)}`)
console.log(`Product(10, 10) = ${multiplication(10, 10)}`)

let sum1 = function () {

    console.log(arguments)
    let i, sum = 0;

    for (i = 0; i < arguments.length; i = i + 1) {
        sum += arguments[i]
    }

    return sum
}


console.log(`Sum of [1, 2, 3, 4, 5, 6, 7, 8, 9, 10] = \
${sum1(1, 2, 3, 4, 5, 6, 7, 8, 9, 10)}`)

/*
if (n > 0)
 n * n - 1
 5 * 4 * 3 * 2 * 1


 */

let fact = function (n) {
    if (n <= 1) return 1 else return n * fact(n - 1)
}

console.log(fact(5))