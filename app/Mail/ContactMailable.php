<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMailable extends Mailable
{
    use Queueable, SerializesModels;

    //Declarar una propiedad publica
    public $contact;
    /**
     * Create a new message instance.
     */
    public function __construct($contact)
    {
        //Asginar el valor del parametro a la propiedad
        $this->contact = $contact;
    }

    //Esta función generalmente devuelve la vista que será utilizada como cuerpo del correo electrónico
    public function build(){
        return $this->view('emails.contactEmail');
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            // Crear un remitente
            from: new Address('groceries@gmail.com', 'Bernardo Tierranegra'),
            subject: 'Contact Groceries',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            //view: 'emails.contactEmail ',
        );
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
