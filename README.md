
# Dokumentasi

Test backend developer

url : http:://127.0.0.1/backend_rentcar/public

## API Reference

#### Get all cars

```http
  GET /api/cars
```

#### Get car

```http
  GET /api/cars/${id}
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `id`      | `string` | **Required**. Id of car to fetch |

#### Create car

```http
  POST /api/cars
```

| Body | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `merek`      | `string` | **Required**. |
| `model`      | `string` | **Required**. |
| `tarif`      | `number` | **Required**. |
| `no_plat`      | `string` | **Required**. |


#### Get all rents

```http
  GET /api/rents
```
#### Get rent

```http
  GET /api/rent/${id}
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `id`      | `string` | **Required**. Id of car to fetch |

#### Register User

```http
  POST /api/cars
```

| Body | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `nama`      | `string` | **Required**. |
| `email`      | `string` | **Required**. |
| `password`      | `string` | **Required**. |
| `no_hp`      | `number` | **Required**. |
| `no_sim`      | `number` | **Required**. |
| `alamat`      | `string` | **Required**. |


### Kekurangan
1. Search
2. Get Users
3. Login & Logout

