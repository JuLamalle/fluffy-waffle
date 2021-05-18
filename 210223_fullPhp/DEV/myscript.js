function display_table_chats() {
    $("#table_chats").css({display: "block"});
    $("#table_users").css({display: "none"});
    $("#add_chats").css({display: "none"});
    $("#add_users").css({display: "none"});
    $("#edit_chats").css({display: "none"});
    $("#edit_users").css({display: "none"});
    $("#delete_chats").css({display: "none"});
    $("#delete_users").css({display: "none"});
}

function display_table_users() {
    $("#table_chats").css({display: "none"});
    $("#table_users").css({display: "block"});
    $("#add_chats").css({display: "none"});
    $("#add_users").css({display: "none"});
    $("#edit_chats").css({display: "none"});
    $("#edit_users").css({display: "none"});
    $("#delete_chats").css({display: "none"});
    $("#delete_users").css({display: "none"});
}
  
  function add_chats() {
    $("#table_chats").css({display: "none"});
    $("#table_users").css({display: "none"});
    $("#add_chats").css({display: "block"});
    $("#add_users").css({display: "none"});
    $("#edit_chats").css({display: "none"});
    $("#edit_users").css({display: "none"});
    $("#delete_chats").css({display: "none"});
    $("#delete_users").css({display: "none"});

}

function add_users() {
    $("#table_chats").css({display: "none"});
    $("#table_users").css({display: "none"});
    $("#add_chats").css({display: "none"});
    $("#add_users").css({display: "block"});
    $("#edit_chats").css({display: "none"});
    $("#edit_users").css({display: "none"});
    $("#delete_chats").css({display: "none"});
    $("#delete_users").css({display: "none"});
}
  
  function edit_chats() {
    $("#table_chats").css({display: "none"});
    $("#table_users").css({display: "none"});
    $("#add_chats").css({display: "none"});
    $("#add_users").css({display: "none"});
    $("#edit_chats").css({display: "block"});
    $("#edit_users").css({display: "none"});
    $("#delete_chats").css({display: "none"});
    $("#delete_users").css({display: "none"});
}

function edit_users() {
    $("#table_chats").css({display: "none"});
    $("#table_users").css({display: "none"});
    $("#add_chats").css({display: "none"});
    $("#add_users").css({display: "none"});
    $("#edit_chats").css({display: "none"});
    $("#edit_users").css({display: "block"});
    $("#delete_chats").css({display: "none"});
    $("#delete_users").css({display: "none"});
}
  
function delete_chats() {
  $("#table_chats").css({display: "none"});
  $("#table_users").css({display: "none"});
  $("#add_chats").css({display: "none"});
  $("#add_users").css({display: "none"});
  $("#edit_chats").css({display: "none"});
  $("#edit_users").css({display: "none"});
  $("#delete_chats").css({display: "block"});
  $("#delete_users").css({display: "none"});
}

function delete_users() {
    $("#table_chats").css({display: "none"});
    $("#table_users").css({display: "none"});
    $("#add_chats").css({display: "none"});
    $("#add_users").css({display: "none"});
    $("#edit_chats").css({display: "none"});
    $("#edit_users").css({display: "none"});
    $("#delete_chats").css({display: "none"});
    $("#delete_users").css({display: "block"});
}

function toggle_chats(){
  $("#toggle_chats").toggle();
}

function toggle_users(){
  $("#toggle_users").toggle();
}
