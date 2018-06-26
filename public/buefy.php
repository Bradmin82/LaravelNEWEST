<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<style>
			[v-cloak] {
				background: red;
			}
		</style>
	</head>
	<body>
		<div id="app">
			<h1 v-cloak v-bind:title="title">{{message}}</h1>
			<h2 :title="title" v-text="message"></h2>
			<ul>
				<li style="list-style-type: none;" v-for="todo in todos">{{todo.id}}.) {{todo.text}}</li>
			</ul>
			<p>Count: {{ count }}</p>
			<input type="text" v-model="message" />
			
			<button v-on:click="countUp">Count Up</button>
			<button @click="countDown">Count Down</button>
			<hr>
			<input type="text" v-model="url" />
			<p>Visit <a :href="url">{{cleanUrl}}</a></p>
			<button @click="humanizeUrl">Humanize</button>
			
			<hr>
			
			<h2 v-model="fullname"> Welcome {{fullname}}</h2>
			<p v-text="first"></p>
			<label>First Name:</label>
			<input type="text" v-model="first" placeholder="first name" />
			<p v-text="last"></p>
			<label>Last Name:</label>			
			<input type="text" v-model="last" placeholder="last name" />
						
		</div>
	</body>
	
	<script src="https://unpkg.com/vue@2.0.3/dist/vue.js"></script>
	
	<script>
		var app = new Vue({
			el: '#app',
			data: {
				message: 'Hello Vue World',
				title: 'Loaded on ' + new Date(),
				todos: [
					{ text: 'Learn Vue', id: 1 },
					{ text: 'Like the video', id: 2 },
					{ text: 'Subscribe to DevMarketer', id: 3 }
				],
			count: 0,
			url: '',
			cleanUrl: '',
			first: '',
			last: ''
			},
			methods: {
				countUp: function() {
					this.count += 1
				},
				countDown: function() {
					this.count -= 1
				},
				humanizeUrl: function() {
					this.cleanUrl = this.url.replace(/^https?:\/\//, '').replace(/\/$/, '')
				}
			},
			computed: {
				fullname: function() {
					return this.first + " " + this.last
				}
			}
		});
	</script>