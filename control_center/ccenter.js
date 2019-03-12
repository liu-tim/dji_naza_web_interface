function log_text(text) {
  var textarea = document.getElementById('log_field');
  $("#log_field").append(text);
  $("#log_field").append("\n");
  textarea.scrollTop = textarea.scrollHeight;
}

function perform_action(action, val) {
  $.ajax("../ccommand.php?"+action+"="+val, {
        success: function(data) {
          log_text(data);
        },
        error: function() {

        }
   });
}

function fly_test(fly_test_speed, fly_test_time) {
  $.ajax("../ccommand.php?fly_test_speed="+fly_test_speed+"&"+"fly_test_time="+fly_test_time, {
        success: function(data) {
          log_text(data);
        },
        error: function() {

        }
   });
}

function move_gimbal(move_gimbal_value, move_gimbal_time) {
  $.ajax("../ccommand.php?move_gimbal_value="+move_gimbal_value+"&"+"move_gimbal_time="+move_gimbal_time, {
        success: function(data) {
          log_text(data);
        },
        error: function() {

        }
   });
}

function recalibrate() {
  $.ajax("../recalibrate.php", {
        success: function(data) {
          log_text(data);
        },
        error: function() {

        }
   });
}
function saveLogAsFile()
{
    var textToWrite = $("#log_field").val();
    var textFileAsBlob = new Blob([textToWrite], {type:'text/plain'});
    var fileNameToSaveAs = "flight_log.txt";

    var downloadLink = document.createElement("a");
    downloadLink.download = fileNameToSaveAs;
    downloadLink.innerHTML = "Download File";
    if (window.webkitURL != null)
    {
        // Chrome allows the link to be clicked
        // without actually adding it to the DOM.
        downloadLink.href = window.webkitURL.createObjectURL(textFileAsBlob);
    }
    else
    {
        // Firefox requires the link to be added to the DOM
        // before it can be clicked.
        downloadLink.href = window.URL.createObjectURL(textFileAsBlob);
        downloadLink.onclick = destroyClickedElement;
        downloadLink.style.display = "none";
        document.body.appendChild(downloadLink);
    }

    downloadLink.click();
}
