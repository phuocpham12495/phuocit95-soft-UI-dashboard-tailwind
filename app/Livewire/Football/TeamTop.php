<?php

namespace App\Livewire\Football;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Livewire\Attributes\Rule;
use Illuminate\Http\Client\ConnectionException;
use Barryvdh\Debugbar\Facades\Debugbar;


class TeamTop extends Component
{
    #[Rule("required")]
    public $leagueId;

    public $teamTop;

    public $errorMsg;

    public function mount() {
        $this->teamTop = json_decode('{
            "country_name": "England",
            "league_id": "152",
            "league_name": "Premier League",
            "team_id": "84",
            "team_name": "Liverpool",
            "overall_promotion": "Promotion - Champions League (Group Stage: )",
            "overall_league_position": "3",
            "overall_league_payed": "38",
            "overall_league_W": "24",
            "overall_league_D": "10",
            "overall_league_L": "4",
            "overall_league_GF": "86",
            "overall_league_GA": "41",
            "overall_league_PTS": "100",
            "home_league_position": "1",
            "home_promotion": "",
            "home_league_payed": "19",
            "home_league_W": "15",
            "home_league_D": "3",
            "home_league_L": "1",
            "home_league_GF": "49",
            "home_league_GA": "17",
            "home_league_PTS": "48",
            "away_league_position": "3",
            "away_promotion": "",
            "away_league_payed": "19",
            "away_league_W": "9",
            "away_league_D": "7",
            "away_league_L": "3",
            "away_league_GF": "37",
            "away_league_GA": "24",
            "away_league_PTS": "34",
            "league_round": "",
            "team_badge": "https://apiv3.apifootball.com/badges/84_liverpool.jpg",
            "fk_stage_key": "6",
            "stage_name": "Current"
        }', true);
    }

    public function load() {
        $this->validate();

        $endpoint_url = "https://apiv3.apifootball.com";

        try{
            $response = Http::timeout(10)->get($endpoint_url . '?APIkey=6438957d52f8604b47fe2d367eaa0f4fb69ed3aaeb6f8624a320386a7d178f46&action=get_standings&league_id=' . $this->leagueId);
            if ($response != null) {
                Debugbar::info("Response status: " . $response->status());
                if($response->ok()) {
                    $teams = $response->json();
                    Debugbar::info("teams: ");
                    Debugbar::info($teams);
                    if (isset($teams["error"])) {
                        $this->teamTop = null;
                        // $this->errorMsg = $teams["message"];
                        $this->errorMsg = "No team is found";
                    }
                    else {
                        $this->teamTop = $teams[0];
                        $this->errorMsg = "";
                    }
                }
            }
            else {
                $this->teamTop = null;
                $this->errorMsg = 'Response is null';
            }
        } catch (ConnectionException $e) {
            Debugbar::error('e: ' . $e);
            $this->errorMsg = "Time out, retry it";
            // report($e);
        }

        Debugbar::error($this->errorMsg);
    }

    public function render()
    {
        return view('livewire.football.team-top', ["teamTop" => $this->teamTop]);
    }
}
