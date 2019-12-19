// =============================================================================
// Post button

let post_like_counters = document.getElementsByClassName('post_like_counter')
let post_love_counters = document.getElementsByClassName('post_love_counter')
let post_comment_counters = document.getElementsByClassName('post_comment_counter')
let post_like_btns = document.getElementsByClassName('post_like_btn')
let post_love_btns = document.getElementsByClassName('post_love_btn')
let post_comment_btns = document.getElementsByClassName('post_comment_btn')
let post_comment_containers = document.getElementsByClassName('comment-container')

let post_like_flag = []
let post_love_flag = []

for(let i = 0; i < post_like_btns.length; i++) {
  post_like_flag[i] = false;
  post_like_btns[i].onclick = function() {
    if (!post_like_flag[i]){
      post_like_counters[i].innerHTML = (Number.parseInt(post_like_counters[i].innerHTML) + 1).toString() + ' '
      post_like_btns[i].style.backgroundColor = '#89d67a';
      post_like_flag[i] = !post_like_flag[i]
    }
    else {
      post_like_counters[i].innerHTML = (Number.parseInt(post_like_counters[i].innerHTML) - 1).toString() + ' '
      post_like_btns[i].style.backgroundColor = 'white';
      post_like_flag[i] = !post_like_flag[i]
    }
  }
}

for(let i = 0; i < post_love_btns.length; i++) {
  post_love_flag[i] = false;
  post_love_btns[i].onclick = function() {
    if (!post_love_flag[i]){
      post_love_counters[i].innerHTML = (Number.parseInt(post_love_counters[i].innerHTML) + 1).toString() + ' '
      post_love_btns[i].style.backgroundColor = '#f79ee3';
      post_love_flag[i] = !post_love_flag[i]
    }
    else {
      post_love_counters[i].innerHTML = (Number.parseInt(post_love_counters[i].innerHTML) - 1).toString() + ' '
      post_love_btns[i].style.backgroundColor = 'white';
      post_love_flag[i] = !post_love_flag[i]
    }
  }
}

for(let i = 0; i < post_comment_btns.length; i++) {
  post_comment_btns[i].onclick = function() {
    post_comment_containers[i].getElementsByTagName('textarea')[0].focus()
  }
}

for(let i = 0; i < post_comment_containers.length; i++) {
  let comments_count = post_comment_containers[i].getElementsByClassName('comment row').length - 1;
  post_comment_counters[i].innerHTML = comments_count.toString() + ' '
}

// =============================================================================
// Comment button

let comment_like_counters = document.getElementsByClassName('comment_like_counter')
let comment_dislike_counters = document.getElementsByClassName('comment_dislike_counter')
let comment_love_counters = document.getElementsByClassName('comment_love_counter')
let comment_like_btns = document.getElementsByClassName('comment_like_btn')
let comment_dislike_btns = document.getElementsByClassName('comment_dislike_btn')
let comment_love_btns = document.getElementsByClassName('comment_love_btn')

let comment_like_flag = []
let comment_dislike_flag = []
let comment_love_flag = []

for(let i = 0; i < comment_like_btns.length; i++) {
  comment_like_flag[i] = false;
  comment_dislike_flag[i] = false;
  comment_love_flag[i] = false;
}

for(let i = 0; i < comment_like_btns.length; i++) {
  comment_like_btns[i].onclick = function() {
    if (!comment_like_flag[i]){
      comment_like_counters[i].innerHTML = (Number.parseInt(comment_like_counters[i].innerHTML) + 1).toString() + ' '
      comment_like_btns[i].style.backgroundColor = '#89d67a';
      comment_like_flag[i] = !comment_like_flag[i]
      if (comment_dislike_flag[i]) {
        comment_dislike_btns[i].click()
      }
    }
    else {
      comment_like_counters[i].innerHTML = (Number.parseInt(comment_like_counters[i].innerHTML) - 1).toString() + ' '
      comment_like_btns[i].style.backgroundColor = 'white';
      comment_like_flag[i] = !comment_like_flag[i]
    }
  }
}

for(let i = 0; i < comment_dislike_btns.length; i++) {
  comment_dislike_btns[i].onclick = function() {
    if (!comment_dislike_flag[i]){
      comment_dislike_counters[i].innerHTML = (Number.parseInt(comment_dislike_counters[i].innerHTML) + 1).toString() + ' '
      comment_dislike_btns[i].style.backgroundColor = '#ff8080';
      comment_dislike_flag[i] = !comment_dislike_flag[i]
      if (comment_like_flag[i]) {
        comment_like_btns[i].click();
      }
      if (comment_love_flag[i]) {
        comment_love_btns[i].click();
      }
    }
    else {
      comment_dislike_counters[i].innerHTML = (Number.parseInt(comment_dislike_counters[i].innerHTML) - 1).toString() + ' '
      comment_dislike_btns[i].style.backgroundColor = 'white';
      comment_dislike_flag[i] = !comment_dislike_flag[i]
    }
  }
}

for(let i = 0; i < comment_love_btns.length; i++) {
  comment_love_flag[i] = false;
  comment_love_btns[i].onclick = function() {
    if (!comment_love_flag[i]){
      comment_love_counters[i].innerHTML = (Number.parseInt(comment_love_counters[i].innerHTML) + 1).toString() + ' '
      comment_love_btns[i].style.backgroundColor = '#f79ee3';
      comment_love_flag[i] = !comment_love_flag[i]
      if (comment_dislike_flag[i]) {
        comment_dislike_btns[i].click()
      }
    }
    else {
      comment_love_counters[i].innerHTML = (Number.parseInt(comment_love_counters[i].innerHTML) - 1).toString() + ' '
      comment_love_btns[i].style.backgroundColor = 'white';
      comment_love_flag[i] = !comment_love_flag[i]
    }
  }
}

for(let i = 0; i < post_comment_containers.length; i++) {
  comment_reply_btns = post_comment_containers[i].getElementsByClassName('comment_reply_btn')
  usernames = post_comment_containers[i].getElementsByClassName('username')
  for(let j = 0; j < comment_reply_btns.length; j++) {
    comment_reply_btns[j].onclick = function() {
      textarea = post_comment_containers[i].getElementsByTagName('textarea')[0]
      textarea.innerHTML = usernames[j].innerHTML.toString() + ' '
      textarea.focus()

    }
  }
}

function cursorAtEnd(textarea) {
  textarea.setSelectionRange(textarea.value.length,textarea.value.length )
}
