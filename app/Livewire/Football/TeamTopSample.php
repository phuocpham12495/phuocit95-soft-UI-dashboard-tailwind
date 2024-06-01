<?php

namespace App\Livewire\Football;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Livewire\Attributes\Rule;
use Illuminate\Http\Client\ConnectionException;
use Barryvdh\Debugbar\Facades\Debugbar;


class TeamTopSample extends Component
{
    #[Rule("required")]
    public $teamId;

    public $teamTop;

    public $errorMsg;

    public function mount() {
        $sampleTeamsTop = json_decode('
        [
            {
                "team_id": "1",
                "league_name": "Premier League",
                "team_name": "Manchester City",
                "overall_league_PTS": "91"
            },
            {
                "team_id": "2",
                "league_name": "Bundesliga",
                "team_name": "Leverkusen",
                "overall_league_PTS": "90"
            },
            {
                "team_id": "3",
                "league_name": "LaLiga",
                "team_name": "Real Madrid",
                "overall_league_PTS": "95"
            },
            {
                "team_id": "4",
                "league_name": "Serie A",
                "team_name": "Inter",
                "overall_league_PTS": "94"
            },
            {
                "team_id": "5",
                "league_name": "Ligue 1",
                "team_name": "PSG",
                "overall_league_PTS": "76"
            }
        ]', true);

        foreach($sampleTeamsTop as $sampleTeamTop) {
            if ($sampleTeamTop["team_id"] == $this->teamId) {
                $this->teamTop = $sampleTeamTop;
                break;
            }
        }
    }

    public function render()
    {
        return view('livewire.football.team-top-sample', ["teamTop" => $this->teamTop]);
    }
}
