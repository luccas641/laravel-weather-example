---
title: API Reference

language_tabs:
- bash

- javascript


includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#Cities
<!-- START_56d7be9447e2ce39ac69b09141bf5902 -->
## Display a listing of cities. Accept filter of latitude and weather.

> Example request:

```bash
curl -X GET -G "http://localhost/api/cities" 
```

```javascript
const url = new URL("http://localhost/api/cities");

    let params = {
            "onlyHasWeather": "non",
            "lat": "minima",
            "lng": "facere",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):


```json
[
    {
        "id": 3531732,
        "coord": {
            "lon": -90.533333,
            "lat": 19.85
        },
        "country": "MX",
        "geoname": {
            "cl": "P",
            "code": "PPLA",
            "parent": 6942858
        },
        "name": "Campeche",
        "stat": {
            "level": 1,
            "population": 205212
        },
        "stations": [
            {
                "id": 3968,
                "dist": 4,
                "kf": 1
            }
        ],
        "zoom": 7
    },
    {
        "id": 3531784,
        "coord": {
            "lon": -98.583328,
            "lat": 19.58333
        },
        "country": "MX",
        "geoname": {
            "cl": "P",
            "code": "PPL",
            "parent": 3515359
        },
        "name": "Calpulalpan",
        "stat": {
            "level": 1,
            "population": 29320
        },
        "stations": [
            {
                "id": 3998,
                "dist": 53,
                "kf": 1
            },
            {
                "id": 4009,
                "dist": 51,
                "kf": 1
            }
        ],
        "zoom": 9
    }
]
```

### HTTP Request
`GET api/cities`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    onlyHasWeather |  optional  | It will show only cities that has weather
    lat |  optional  | Filter by lat. Required if lng is set.
    lng |  optional  | Filter by lng. Requires id lat is set.

<!-- END_56d7be9447e2ce39ac69b09141bf5902 -->

<!-- START_0651fff87b81a4d1e8d166065f7676f0 -->
## Display the specified city.

> Example request:

```bash
curl -X GET -G "http://localhost/api/cities/1" 
```

```javascript
const url = new URL("http://localhost/api/cities/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):


```json
{
    "id": 3531732,
    "coord": {
        "lon": -90.533333,
        "lat": 19.85
    },
    "country": "MX",
    "geoname": {
        "cl": "P",
        "code": "PPLA",
        "parent": 6942858
    },
    "name": "Campeche",
    "stat": {
        "level": 1,
        "population": 205212
    },
    "stations": [
        {
            "id": 3968,
            "dist": 4,
            "kf": 1
        }
    ],
    "zoom": 7
}
```
> Example response (404):


```json
{
    "message": "Resource not found"
}
```

### HTTP Request
`GET api/cities/{city}`


<!-- END_0651fff87b81a4d1e8d166065f7676f0 -->

#Weather
<!-- START_d9905ee6ae76e73215382821fdee8f72 -->
## Display the weather for a city.

> Example request:

```bash
curl -X GET -G "http://localhost/api/cities/1/weather" 
```

```javascript
const url = new URL("http://localhost/api/cities/1/weather");

    let params = {
            "from": "cupiditate",
            "to": "id",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):


```json
{
    "cityId": 3531732,
    "data": [
        {
            "dt": 1489428000,
            "temp": {
                "day": 299.15,
                "min": 298.2,
                "max": 299.15,
                "night": 298.2,
                "eve": 299.15,
                "morn": 299.15
            },
            "pressure": 1027.35,
            "humidity": 100,
            "weather": [
                {
                    "id": 803,
                    "main": "Clouds",
                    "description": "broken clouds",
                    "icon": "04n"
                }
            ],
            "speed": 6.71,
            "deg": 337,
            "clouds": 68,
            "uvi": 10.34
        },
        {
            "dt": 1489514400,
            "temp": {
                "day": 297.66,
                "min": 297.04,
                "max": 297.98,
                "night": 297.54,
                "eve": 297.98,
                "morn": 297.04
            },
            "pressure": 1033.6,
            "humidity": 100,
            "weather": [
                {
                    "id": 500,
                    "main": "Rain",
                    "description": "light rain",
                    "icon": "10d"
                }
            ],
            "speed": 7.28,
            "deg": 14,
            "clouds": 80,
            "rain": 0.59,
            "uvi": 10.83
        },
        {
            "dt": 1489600800,
            "temp": {
                "day": 296.61,
                "min": 296.61,
                "max": 299.06,
                "night": 298.43,
                "eve": 297.87,
                "morn": 296.75
            },
            "pressure": 1035.33,
            "humidity": 100,
            "weather": [
                {
                    "id": 800,
                    "main": "Clear",
                    "description": "sky is clear",
                    "icon": "01d"
                }
            ],
            "speed": 6.91,
            "deg": 38,
            "clouds": 0,
            "uvi": 10.96
        }
    ]
}
```
> Example response (404):


```json
{
    "message": "Resource not found"
}
```

### HTTP Request
`GET api/cities/{city}/weather`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    from |  optional  | Filter from date. Required if to is set.
    to |  optional  | Filter to date. Requires id from is set.

<!-- END_d9905ee6ae76e73215382821fdee8f72 -->


