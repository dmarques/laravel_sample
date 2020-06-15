# Simple API project with Laravel

#### Find all records

Method: GET 

```shell
/api/posts
```

Response: 
```json
[
  {
    "id": 1,
    "title": "Reiciendis ex possimus totam vero quo.",
    "body": "Dolorem rem in aut dolorem ut occaecati inventore. Sapiente quis esse et atque ab et. Tempora id illo ratione. Adipisci est et voluptatem nemo aut.",
    "created_at": "2020-06-15T11:46:34.000000Z",
    "updated_at": "2020-06-15T11:46:34.000000Z"
  },
  {
    "id": 2,
    "title": "Dignissimos et cumque cum rem quis impedit.",
    "body": "Et aut aut dolor recusandae. Beatae dolor voluptas et sit omnis beatae aut vel. Impedit tenetur ut vel aut quasi labore ut. Et qui et aut doloribus rerum.",
    "created_at": "2020-06-15T11:46:34.000000Z",
    "updated_at": "2020-06-15T11:46:34.000000Z"
  },
  {
    "id": 3,
    "title": "Quidem vel et porro laborum.",
    "body": "Ipsam debitis quis quae et eaque nostrum laboriosam nemo. Harum enim ex quidem velit dolorum sint. Suscipit occaecati dolores neque rerum. Quos ut quia libero earum. Vel rerum eos nihil nihil quae.",
    "created_at": "2020-06-15T11:46:34.000000Z",
    "updated_at": "2020-06-15T11:46:34.000000Z"
  }
]
```
<br />

#### Find record by Id

Method: GET 

```shell
/api/posts/:id
```

Example: 
```shell
/api/posts/2
```

Response:
```json
{
  "id": 2,
  "title": "Dignissimos et cumque cum rem quis impedit.",
  "body": "Et aut aut dolor recusandae. Beatae dolor voluptas et sit omnis beatae aut vel. Impedit tenetur ut vel aut quasi labore ut. Et qui et aut doloribus rerum.",
  "created_at": "2020-06-15T11:46:34.000000Z",
  "updated_at": "2020-06-15T11:46:34.000000Z"
}
```

<br />

#### Create a record

Method: POST 

```shell
/api/posts
```

Body:
```json
{
    "title": "Test Post 1",
    "body": "Lorem Ipsum 1"
}
```

Response:
```json
{
    "title": "Test Post 1",
    "body": "Lorem Ipsum 1",
    "updated_at": "2020-06-15T13:01:45.000000Z",
    "created_at": "2020-06-15T13:01:45.000000Z",
    "id": 51
}
```

<br/>

#### Modify a record by Id

Method: PUT 

```shell
/api/posts/:id
```

Example:
```shell
/api/posts/51
```

Body:
```json
{
    "title": "Test Post 51"
}
```

Response:
```json
200 OK
```

<br />

#### Delete a record by Id

Method: DELETE 

```shell
/api/posts/:id
```

Example:
```shell
/api/posts/51
```


Response:
```json
204 No Content
```