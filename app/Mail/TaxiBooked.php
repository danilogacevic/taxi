<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class TaxiBooked extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $data;

    public function __construct($data)
    {
        //

        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.taxi')->from($this->data['email'])->subject('Taxi Booking Online')->with([

            'pick_up' => $this->data['pick-up'],

            'drop_off'=>$this->data['drop-off'],
            'dropoff_address' =>$this->data['dropoff-address'],
            'date_time' => $this->data['date-time'],
            'flight_number' =>$this->data['flight-number'],
            'num_of_passengers' => $this->data['num-of-passengers'],
            'num_of_baggage' =>$this->data['num-of-baggage'],
            'transfer_class' => $this->data['transfer-class'],
            'name' => $this->data['name'],
            'email' => $this->data['email'],
            'phone_number' => $this->data['phone-number'],
            'notes' =>$this->data['notes']

        ]);
    }
}
