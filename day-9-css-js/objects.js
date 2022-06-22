let empty_object = {}
console.log(empty_object)

let train = {
    "provider": "Indian Railways",
    "TNO": 16520,
    "departure": {
        "city": "Pune",
        "station_code": "PUNE",
        "time": "2022-05-27 18:30"
    },
    "arrival": {
        "city": "Mumbai",
        "station_code": "CSTM",
        "time": "2022-05-27 23:50"
    }
}
train.departure.time = "2022-05-27 18:45"
console.log(train)
console.log(`City : ${train.departure.city}, Time: ${train.departure.time}`)
console.log(`PNR : ${train.PNR}`)
console.log(`City : ${train['departure']['city']}`)

train.departure.city = 'Nagpur'
train.departure.station_code = 'NGPR'

console.log(train.departure)

let departure = train.departure
console.log(departure)

console.log(`Departure : ${typeof train.departure}`)
console.log(`Departure City: ${typeof train.departure.city}`)
console.log(`Train No: ${typeof train.TNO}`)

console.log(`${train.hasOwnProperty('departure')}`)

delete train.departure
console.log(train)

let APPDATA = {}

APPDATA.train = train;
APPDATA.departure = departure;
console.log(APPDATA)
train.departure = departure;
console.log(train)
