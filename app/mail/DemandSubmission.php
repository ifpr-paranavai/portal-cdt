<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DemandSubmission extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email = $this->from('cdt.projetos@gmail.com', config('app.name'))
                      ->to('cdt.projetos@gmail.com')
                      ->view('emails.demand_submission')
                      ->with('data', $this->data)
                      ->subject('Nova Submissão de Demanda');

        // Anexar arquivos, se houver
        if (isset($this->data['files'])) {
            foreach ($this->data['files'] as $file) {
                $email->attach($file->getRealPath(), [
                    'as' => $file->getClientOriginalName(),
                    'mime' => $file->getMimeType(),
                ]);
            }
        }

        return $email;
    }
}