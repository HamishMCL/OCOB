
new Vue({
	el: '#stats',


	data:{
		player: '',
		runs: '',
		sixes: '',
		fours: '',
		out: '',
		wickets: '',
		overs: '',
		maidens: '',
		runs_conceded: '',

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
			var r = confirm('Player:' + this.player +'\n'+ 'Wickets:'  +
				this.wickets + '\n'+'Overs:' + this.overs +'\n'+
				'Maidens:'+""+ + this.maidens +'\n'+ 'Runs Conceded:'+ '+'+ this.runs_conceded)
			if(r == true)
			{
			}else
			{
				e.preventDefault();
			}


		}

	}
	

	
})

