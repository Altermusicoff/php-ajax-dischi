<!-- TODO TODAY
REPO: php-ajax-dischi
GOAL: Attraverso l'utilizzo di Axios: al caricamento
della pagina axios chiederà attraverso una
chiamata API i dischi a php e li stamperà
attraverso vue.
OPZIONALE
- Attraverso un'altra chiamata API, ﬁltrare gli
album per genere -->

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Alter - Dischi</title>
  <!-- font awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
  <!-- bootstrap v4 -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <!-- vue -->
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <!-- axios -->
  <script src="https://cdn.jsdelivr.net/npm/axios@0.21.1/dist/axios.min.js"></script>
  <!-- jquery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- css -->
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>

<body>
  <div id="app" class="container vh-100">


    <div v-for='album in albums' class="">
      <div v-if="select == album.genre || select == 'All' ">
        <img :src="album.poster" alt="">
        <p>{{album.title}}</p>
        <p>{{album.author}}</p>
        <p>{{album.genre}}</p>
        <p>{{album.year}}</p>
      </div>

    </div>

    <div>
      <p>{{select}}</p>
      <select v-model='select'>
        <option value="All">All</option>
        <option value="Jazz">Jazz</option>
        <option value="Metal">Metal</option>
        <option value="Pop">Pop</option>
        <option value="Rock">Rock</option>
      </select>
    </div>

  </div>
</body>

</html>