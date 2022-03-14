var i = 0;

function workerCount() {
    i = i + 1;
    postMessage(i);
    setTimeout("workerCount()", 500);
}

workerCount();