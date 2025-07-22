<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use OpenApi\Annotations as OA;

/**
 * @OA\Tag(
 *     name="Siswa",
 *     description="API untuk manajemen data siswa"
 * )
 */
class SiswaController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/siswa",
     *     tags={"Siswa"},
     *     summary="Ambil semua data siswa",
     *     security={{"ApiKeyAuth":{}}},
     *     @OA\Response(
     *         response=200,
     *         description="Berhasil mengambil data siswa",
     *         @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/Siswa"))
     *     )
     * )
     */
    public function index()
    {
        $siswaList = Siswa::all();
        return view('pages.siswa.index', compact('siswaList'));
    }

    /**
     * @OA\Post(
     *     path="/api/siswa",
     *     tags={"Siswa"},
     *     summary="Tambah data siswa baru",
     *     security={{"ApiKeyAuth":{}}},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/Siswa")
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Siswa berhasil ditambahkan",
     *         @OA\JsonContent(ref="#/components/schemas/Siswa")
     *     )
     * )
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'nis' => 'required|unique:siswas',
            'kelas' => 'required',
            'jurusan' => 'nullable',
            'alamat' => 'nullable',
        ]);

        return Siswa::create($validated);
    }

    /**
     * @OA\Get(
     *     path="/api/siswa/{id}",
     *     tags={"Siswa"},
     *     summary="Lihat detail siswa",
     *     security={{"ApiKeyAuth":{}}},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Detail siswa ditemukan",
     *         @OA\JsonContent(ref="#/components/schemas/Siswa")
     *     ),
     *     @OA\Response(response=404, description="Siswa tidak ditemukan")
     * )
     */
    public function show($id)
    {
        return Siswa::findOrFail($id);
    }

    /**
     * @OA\Put(
     *     path="/api/siswa/{id}",
     *     tags={"Siswa"},
     *     summary="Perbarui data siswa",
     *     security={{"ApiKeyAuth":{}}},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/Siswa")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Siswa berhasil diperbarui",
     *         @OA\JsonContent(ref="#/components/schemas/Siswa")
     *     )
     * )
     */
    public function update(Request $request, $id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->update($request->only(['nama', 'nis', 'kelas', 'jurusan', 'alamat']));
        return $siswa;
    }

    /**
     * @OA\Delete(
     *     path="/api/siswa/{id}",
     *     tags={"Siswa"},
     *     summary="Hapus siswa",
     *     security={{"ApiKeyAuth":{}}},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Siswa berhasil dihapus",
     *         @OA\JsonContent(example={"message": "Siswa berhasil dihapus"})
     *     ),
     *     @OA\Response(response=404, description="Siswa tidak ditemukan")
     * )
     */
    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();

        return response()->json(['message' => 'Siswa berhasil dihapus']);
    }
}