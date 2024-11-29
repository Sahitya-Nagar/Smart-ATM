
function invokeAfterDelay(callback) {
    setTimeout(callback, 2000); // 2000 milliseconds = 2 second
  }
  function display_message() {
   alert('Hello!');
  }
  invokeAfterDelay(display_message);
