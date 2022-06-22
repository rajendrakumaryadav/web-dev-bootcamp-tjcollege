let empty = []
console.log(empty)
console.log(empty.length)
console.log(empty[0])


let numbers = ['Zero', 'One', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight', 'Nine']
console.log(numbers)
console.log(numbers.length)
console.log(numbers[1])

numbers.forEach(e => {
    console.info(`Number : ${e}`)
})
console.log()
for (let i = 0; i < numbers.length; i++) {
    console.log(`${i} : ${numbers[0]}`)
}

let numbers_object = {
    'zero': 0, 'one': 1, 'two': 2, 'three': 3, 'four': 4
};

let misc = ['string', 98.6, true, false, null, undefined, ['nested', 'array'], {"object": true}, NaN, Infinity]

console.log(misc)
console.log(misc.length)
console.log(misc[6][1])

let myData = []
console.log(myData.length)

// n + 1, where n =  10000
myData[5000] = false;
myData[10000] = true
console.log(myData.length)
console.log(myData)


// numbers.length = 3
// console.log(numbers)
numbers[numbers.length] = "122"
console.log(numbers)

numbers.push("300")
console.log(numbers)

numbers.push("120", "300", "400")
console.log(numbers)

delete numbers[numbers.length - 1]
console.log(numbers)

// numbers.splice(3, 5);
// console.log(numbers)

let newData = numbers.slice(3, 8)
console.log(newData)


let x;
for (x = 0; x < numbers.length; x += 1) {
    console.log(`${x} : ${numbers[x]}`)
}
// Array Methods
let num_array = [1, 2, 3, 4, 5, 6, 7, 8, 9]

num_array.reduce = function (f, value) {
    let i;

    for (i = 0; i < this.length; i += 1) {
        value = f(this[i], value);
    }
    return value;
};


const add = function (x, y) {
    return x + y;
}

const multi = function (x, y) {
    return x * y;
}


let sum = num_array.reduce(add, 0);
console.log(sum)

let product = num_array.reduce(multi, 1);
console.log(product)

Array.dim = function (dimension, initial) {
    let a = [], i;
    for (i = 0; i < dimension; i += 1) {
        a[i] = initial
    }
    return a
}

let myArray = Array.dim(10, 0);

console.log(myArray)

let matrix = [[0, 1, 2], [3, 4, 5], [6, 7, 8]]
console.log(matrix)
console.log(matrix[1][2])

Array.matrix = function (row, col, initial) {
    let a, i, j, mat = []

    for (i = 0; i < row; i += 1) {
        a = []
        for (j = 0; j < col; j += 1) {
            a[j] = initial;
        }
        mat[i] = a;
    }
    return mat;
}

// [
//     [ 1, 1, 1, 1 ],
//     [ 1, 1, 1, 1 ],
//     [ 1, 1, 1, 1 ],
//     [ 1, 1, 1, 1 ]
// ]

console.log(Array.matrix(4, 4, 1))