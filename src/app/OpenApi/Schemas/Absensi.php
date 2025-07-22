<?php
namespace App\OpenApi\Schemas;

/**
 * @OA\Schema(
 *     schema="Absensi",
 *     title="Absensi",
 *     description="Data kehadiran siswa",
 *     required={"id", "siswa_id", "tanggal", "status"},
 *     @OA\Property(property="id", type="integer", example=1),
 *     @OA\Property(property="siswa_id", type="integer", example=3),
 *     @OA\Property(property="tanggal", type="string", format="date", example="2025-07-21"),
 *     @OA\Property(property="status", type="string", enum={"hadir", "izin", "sakit", "alpa"}, example="hadir"),
 *     @OA\Property(property="created_at", type="string", format="date-time"),
 *     @OA\Property(property="updated_at", type="string", format="date-time")
 * )
 */
class Absensi {}
