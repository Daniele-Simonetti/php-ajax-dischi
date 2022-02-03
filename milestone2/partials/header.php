<header class="text-start">
    <img
    src="http://<?php echo $_SERVER['HTTP_HOST'] ?>/php-ajax-dischi/milestone1/img/logospot.png"
      alt=""
    >
    <select name="genre" id="genre" v-model="textSearch" @change="changeGenre">
      <option value="all">all</option>
      <option value="Rock">rock</option>
      <option value="Pop">pop</option>
      <option value="Jazz">jazz</option>
      <option value="Metal">metal</option>
    </select>
  </header>