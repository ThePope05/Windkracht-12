<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\Invite;

class ActivateAccount extends Mailable
{
    use Queueable, SerializesModels;

    public String $email;

    /**
     * Create a new message instance.
     */
    public function __construct(String $email)
    {
        $this->email = $email;
    }

    public function build()
    {
        return $this->view('emails.invite')
            ->with(['email' => $this->email]);
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('noreply@windkracht12.nl', 'Windkracht 12'),
            subject: 'Activate Account',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        $invite = Invite::where('email', $this->email)->first();

        return new Content(
            view: 'mail.activate',
            with: ['invite' => $invite],
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
