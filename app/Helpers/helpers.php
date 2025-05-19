<?php
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Mime\Part\TextPart;

if (!function_exists('sendMailCommon')) {
    function sendMailCommon($to, $subject, $content) {
        try {
            Mail::send([], [], function ($message) use ($to, $subject, $content) {
                $message->to($to)
                        ->subject($subject);

                // Set body as a proper MIME part
                $message->getSymfonyMessage()->setBody(
                    new TextPart($content, 'utf-8', 'html')
                );
            });
        } catch (\Exception $e) {
            \Log::error("Failed to send email to $to: " . $e->getMessage());
        }
    }
}
