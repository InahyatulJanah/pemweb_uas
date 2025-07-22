<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use Illuminate\Http\Request;
use OpenApi\Annotations as OA;

/**
 * @OA\Tag(
 *     name="Absensi",
 *     description="API untuk manajemen data absensi siswa"
 * )
 */
class AbsensiController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/absensi",
     *     tags={"Absensi"},
     *     summary="Ambil semua data absensi",
     *     security={{"ApiKeyAuth":{}}},
     *     @OA\Response(
     *         response=200,
     *         description="List absensi",
     *         @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/Absensi"))
     *     )
     * )
     */
    public function index()
    {
        return Absensi::all();
    }

    /**
     * @OA\Post(
     *     path="/api/absensi",
     *     tags={"Absensi"},
     *     summary="Tambah data absensi",
     *     security={{"ApiKeyAuth":{}}},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/Absensi")
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Absensi ditambahkan",
     *         @OA\JsonContent(ref="#/components/schemas/Absensi")
     *     )
     * )
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'siswa_id' => 'required|exists:siswas,id',
            'tanggal' => 'required|date',
            'status' => 'required|in:hadir,izin,sakit,alpa',
        ]);

        return Absensi::create($validated);
    }

    /**
     * @OA\Get(
     *     path="/api/absensi/{id}",
     *     tags={"Absensi"},
     *     summary="Ambil detail absensi",
     *     security={{"ApiKeyAuth":{}}},
     *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
     *     @OA\Response(
     *         response=200,
     *         description="Data ditemukan",
     *         @OA\JsonContent(ref="#/components/schemas/Absensi")
     *     ),
     *     @OA\Response(response=404, description="Data tidak ditemukan")
     * )
     */
    public function show($id)
    {
        return Absensi::findOrFail($id);
    }

    /**
     * @OA\Put(
     *     path="/api/absensi/{id}",
     *     tags={"Absensi"},
     *     summary="Update data absensi",
     *     security={{"ApiKeyAuth":{}}},
     *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
     *     @OA\RequestBody(required=true, @OA\JsonContent(ref="#/components/schemas/Absensi")),
     *     @OA\Response(response=200, description="Data diperbarui", @OA\JsonContent(ref="#/components/schemas/Absensi"))
     * )
     */
    public function update(Request $request, $id)
    {
        $absensi = Absensi::findOrFail($id);
        $absensi->update($request->only(['siswa_id', 'tanggal', 'status']));
        return $absensi;
    }

    /**
     * @OA\Delete(
     *     path="/api/absensi/{id}",
     *     tags={"Absensi"},
     *     summary="Hapus data absensi",
     *     security={{"ApiKeyAuth":{}}},
     *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
     *     @OA\Response(response=200, description="Data dihapus", @OA\JsonContent(example={"message": "Berhasil dihapus"}))
     * )
     */
    public function destroy($id)
    {
        $absensi = Absensi::findOrFail($id);
        $absensi->delete();

        return response()->json(['message' => 'Berhasil dihapus']);
    }
}
