<?php

namespace App\Exports;

use App\Tournament;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;

class TournamentExport implements FromCollection, WithHeadings, ShouldAutoSize, WithEvents, WithMapping, WithColumnFormatting
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Tournament::all();
    }


    /**
     * @param $tournament
     * @return array
     */
    public function map($tournament): array
    {
        return [
            $tournament->organizer_name,
            $tournament->organizer_address,
            $tournament->organizer_telephone_no,
            $tournament->organizer_mobile_no,
            $tournament->email,
            $tournament->company_name,
            $tournament->company_address,
            $tournament->company_telephone_no,
            $tournament->website,
            $tournament->tournament_name,
            $tournament->proposed_date,
            $tournament->proposed_venue,
            $tournament->final_venue,
            $tournament->surface,
            $tournament->details,
            $tournament->tournament_fees,
            $tournament->proposed_prize,
            $tournament->business_details,
            $tournament->is_registered_company ? 'Yes' : 'No',
            $tournament->matches_place_one_emirate ? 'Yes' : 'No',
            $tournament->has_tournament_run_previously ? 'Yes' : 'No',
            $tournament->have_any_team_sold_before ? 'Yes' : 'No',
            $tournament->have_any_team_banned_before ? 'Yes' : 'No',
            $tournament->proposed_payment ? 'Yes' : 'No',
            $tournament->any_team_using_banned_players ? 'Yes' : 'No',
            $tournament->have_player_played_any_tournament ? 'Yes' : 'No',
            $tournament->have_cricketers_played_any_tournament ? 'Yes' : 'No',
            $tournament->high_profile_former_international_cricketers ? 'Yes' : 'No',
            $tournament->matches_in_one_emirate ? 'Yes' : 'No',
            $tournament->status  === 1 ? 'Approved' : $tournament->status === 0 ? 'Declined' : 'Pending',
            Date::dateTimeToExcel($tournament->created_at),
        ];
    }

    public function headings(): array
    {
        return ['Organizer Name', 'Organizer Address', 'Organizer Telephone No', 'Organizer Mobile No', 'Email', 'Company Name', 'Company Address', 'Company Telephone No', 'Website', 'Tournament Name',
            'Proposed Date', 'Proposed Venue', 'Final Venue', 'Surface', 'Details', 'Tournament Fees', 'Proposed Prize', 'Business Details', 'Is The Organization A Registered Company In The UAE?',
            'Are All Matches To Take Place In One Emirate?', 'Has This Tournament Been Run Previously?', 'Have any of the teams been sold by the organizers on a franchise arrangement?',
            'Have any of the teams ever been prevented or banned from participating in approved cricket in the UAE?', 'Are you aware of any proposed payments being made to any players to take part in this tournament?',
            'Are you aware of any team that is proposing to use players who have been prevented or banned from participating in approved cricket in the UAE or elsewhere?', 'Have any of the players taking part in the tournament played in the last 24 months in Test, ODI or T20i cricket?',
            'Are there any cricketers from ANY country that have played First Class Cricket or List A cricket in the last 24 months?', 'Are there any high profile former international cricketers being used by the tournament organizers or teams as brand ambassadors?', 'Are All Matches To Take Place In One Emirate?', 'Status', 'Requested At'];
    }

    /**
     * @return array
     */
    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {
                $cellRange = 'A1:AE1'; // All headers
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(12)->setBold(true);
            },
        ];
    }

    public function columnFormats(): array
    {
        return [
            'K' => NumberFormat::FORMAT_DATE_DDMMYYYY,
            'AE' => NumberFormat::FORMAT_DATE_DDMMYYYY,
        ];
    }
}
