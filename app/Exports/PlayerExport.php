<?php

namespace App\Exports;

use App\Player;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;

class PlayerExport implements FromCollection, WithHeadings, ShouldAutoSize, WithEvents, WithMapping, WithColumnFormatting
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Player::with('country')->get();
    }


    /**
     * @param $player
     * @return array
     */
    public function map($player): array
    {
        return [
            $player->first_name,
            $player->last_name,
            $player->dob,
            $player->email,
            $player->mobile,
            $player->country->name,
            $player->living_in,
            $player->visa_status ? 'Residence/Employment' : 'Visit Visa',
            $player->playing_with,
            $player->message,
            $player->status === 1 ? 'Approved' : $player->status === 0 ? 'Declined' : 'Pending',
            Date::dateTimeToExcel($player->created_at),
        ];
    }

    public function headings(): array
    {
        return ['First Name', 'Last Name', 'Date Of Birth', 'Email', 'Mobile No', 'Nationality', 'Living In', 'Visa Status', 'Playing With', 'Message', 'Status', 'Requested At'];
    }

    /**
     * @return array
     */
    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {
                $cellRange = 'A1:W1'; // All headers
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(12)->setBold(true);
            },
        ];
    }

    public function columnFormats(): array
    {
        return [
            'C' => NumberFormat::FORMAT_DATE_DDMMYYYY,
            'L' => NumberFormat::FORMAT_DATE_DDMMYYYY,
        ];
    }
}
