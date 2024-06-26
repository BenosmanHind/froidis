<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Devis extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    public $filePath;
    /**
     * Create a new message instance.
     */
    public function __construct($data ,$filePath = null)
    {
        $this->data = $data;
        $this->filePath = $filePath;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Devis',
        );
    }

    /**
     * Get the message content definition.
     */
    public function build()
    {
        $subject = "Message depuis Froidis";

    if (isset($this->filePath)) {
        // Si le chemin du fichier de la pièce jointe est défini, joindre le fichier à l'e-mail
        return $this->subject($subject)
                    ->view('mail.contact')
                    ->with('data', $this->data)
                    ->attach(storage_path('app/' . $this->filePath));
    } else {
        // Sinon, envoyer l'e-mail sans pièce jointe
        return $this->subject($subject)
                    ->view('mail.contact')
                    ->with('data', $this->data);
    }
    }


    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
