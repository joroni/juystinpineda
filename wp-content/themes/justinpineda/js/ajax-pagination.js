$(function() {

  var paged = 1,
    isLoading = false,
    posts = $('.posts'),
    button = $('.read_more'),
    foundPosts = button.attr('data-found-posts');

  (function() {
    hasMoreItens() && button.fadeIn();
  })();

  function hasMoreItens() {
    return !(posts.find('.item').length == foundPosts);
  }

  function toggleLoading() {
    isLoading = !isLoading;
    if (isLoading) {
      button.text('Carregando...');
      button.attr('disabled', 'disabled');
    } else if (!isLoading && hasMoreItens()) {
      button.text('Ver mais...');
      button.removeAttr('disabled');
    }
  }

  button.click(function() {
    paged++;
    toggleLoading();
    $.get(
      themeUrl + 'inc/inc-posts.php', {
        paged: paged,
      },
      function(data) {
        posts.append(data);
        toggleLoading();
        !hasMoreItens() && button.fadeOut();
      }
    );
  });

});