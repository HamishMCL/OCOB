
new Vue({
	el: '#stats',


	data:{
		player: '',
		runs: '',
		sixes: '',
		fours: '',
		out: '',

	},

	methods: {

		addBattingStats: function(e)
		{
			var r = confirm('Player:' + this.player +'\n'+ 'Sixes:'  +
				this.sixes + '\n'+'Runs:' + this.runs +'\n'+
				'Fours:'+""+ + this.fours +'\n'+ 'Out:'+ '+'+ this.out)
			if(r == true)
			{
			}else
			{
				e.preventDefault();
			}


		},

			addBowlingStats: function(e)
		{
			var r = confirm('Player:' + this.player +'\n'+ 'Sixes:'  +
				this.sixes + '\n'+'Runs:' + this.runs +'\n'+
				'Fours:'+""+ + this.fours +'\n'+ 'Out:'+ '+'+ this.out)
			if(r == true)
			{
			}else
			{
				e.preventDefault();
			}


		}

	}
	

	
})

