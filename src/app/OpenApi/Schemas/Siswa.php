<?php

namespace App\OpenApi\Schemas;

/**
 * @OA\Schema(
 *     schema="Siswa",
 *     type="object",
 *     title="Siswa",
 *     required={"id", "nama", "nis", "kelas"},
 *     @OA\Property(property="id", type="integer", example=1),
 *     @OA\Property(property="nama", type="string", example="Budi Santoso"),
 *     @OA\Property(property="nis", type="string", example="12345678"),
 *     @OA\Property(property="kelas", type="string", example="XII IPA 3"),
 *     @OA\Property(property="jurusan", type="string", nullable=true, example="IPA"),
 *     @OA\Property(property="alamat", type="string", nullable=true, example="Jl. Merdeka No. 1"),
 *     @OA\Property(property="created_at", type="string", format="date-time"),
 *     @OA\Property(property="updated_at", type="string", format="date-time")
 * )
 */
class Siswa {}
