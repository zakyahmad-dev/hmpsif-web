<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PublicFormsTest extends TestCase
{
    use RefreshDatabase;

    public function test_valid_membership_application_is_saved(): void
    {
        $response = $this->post(route('gabung.store'), [
            'nama' => 'Alya Informatika',
            'nim' => '20261001',
            'semester' => 3,
            'kelas' => 'IF-A',
            'whatsapp' => '081234567890',
            'email' => 'alya@example.com',
            'divisi' => 'Kominfo',
            'alasan' => 'Ingin belajar dan berkontribusi.',
            'agree' => '1',
        ]);

        $response->assertSessionHas('success');
        $this->assertDatabaseHas('pendaftaran', [
            'nim' => '20261001',
            'email' => 'alya@example.com',
            'status' => 'Pending',
        ]);
    }

    public function test_valid_contact_message_is_saved(): void
    {
        $response = $this->post(route('kontak.store'), [
            'nama' => 'Bima Informatika',
            'email' => 'bima@example.com',
            'subjek' => 'Kolaborasi',
            'pesan' => 'Saya ingin mengajak kolaborasi.',
        ]);

        $response->assertSessionHas('success');
        $this->assertDatabaseHas('kontak', [
            'email' => 'bima@example.com',
            'subjek' => 'Kolaborasi',
        ]);
    }
}
