const { app, BrowserWindow, ipcRenderer } = require('electron')
window.$ = window.jQuery = require('jquery');
export const vns={};
vns.post= async function (url,data) {
	var st = new Date();
	return await $.ajax({
		type: 'POST',
		url: url,
		async: true,
		contentType: "application/json",
		dataType: 'json',
		data: JSON.stringify(data),
		success: function(data) { 
			var end = new Date();
			var dif = (end - st) / 1000;
			var s = Math.round(dif);
			console.log(`[OK] ${url} : ${s} ms`, data);
			return data;
		},
		error: function (err) { 
			var end = new Date();
			var dif = (end - st) / 1000;
			var s = Math.round(dif);
			console.log(`[ER] ${url} : ${s} ms`,err);
			return err;
		}
	});
}
vns.maximinze = async function(){
  ipcRenderer.send('maximinze',true);
}
vns.popup = async function(title, message){
	console.log(title);
	ipcRenderer.send('popup',{title:title,message:message});
}
vns.miniminze = async function(){
  ipcRenderer.send('miniminze',true);
}
vns.hidden = async function(){
  ipcRenderer.send('hidden',true);
}
vns.exit = async function(){
  ipcRenderer.send('exit',true);
}