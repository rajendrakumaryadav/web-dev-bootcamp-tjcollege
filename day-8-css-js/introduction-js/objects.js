let empty_object = {}
console.log(empty_object)

let train = {
    "provider": "Indian Railways",
    "TNO": "16520",
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
