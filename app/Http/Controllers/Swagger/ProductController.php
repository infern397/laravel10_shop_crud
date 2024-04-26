<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;

/**
 *
 * @OA\Post(
 *     path="/api/products",
 *     summary="Создание",
 *     tags={"Product"},
 *
 *     @OA\RequestBody(
 *         @OA\MediaType(
 *             mediaType="multipart/form-data",
 *             @OA\Schema(
 *                 @OA\Property(property="name", type="string", example="Some name"),
 *                 @OA\Property(property="description", type="string", example="Some description"),
 *                 @OA\Property(property="price", type="number", example=300),
 *                 @OA\Property(property="stock", type="integer", example=20),
 *                 @OA\Property(property="image_url", type="file", format="jpg", example="test.jpg"),
 *                 @OA\Property(property="category_id", type="integer", example=1),
 *             )
 *         )
 *     ),
 *
 *     @OA\Response(
 *         response=200,
 *         description="Ok",
 *         @OA\JsonContent(
 *             @OA\Property(property="data", type="object",
 *                 @OA\Property(property="name", type="string", example="Some name"),
 *                 @OA\Property(property="description", type="string", example="Some description"),
 *                 @OA\Property(property="price", type="number", example=300),
 *                 @OA\Property(property="stock", type="integer", example=20),
 *                 @OA\Property(property="image_url", type="file", format="jpg", example="images/products/ccS8JvPDfyiePQEuNfSbF5zMJQ6u46cJX0IQ2IB6.png"),
 *                 @OA\Property(property="category_id", type="integer", example=1),
 *             ),
 *         ),
 *     ),
 * ),
 * @OA\Get(
 *      path="/api/products",
 *      summary="Список",
 *      tags={"Product"},
 *
 *      @OA\Response(
 *          response=200,
 *          description="Ok",
 *          @OA\JsonContent(
 *              @OA\Property(property="data", type="array", @OA\Items(
 *                  @OA\Property(property="id", type="integer", example=1),
 *                  @OA\Property(property="name", type="string", example="Some name"),
 *                  @OA\Property(property="description", type="string", example="Some description"),
 *                  @OA\Property(property="price", type="string", example=300),
 *                  @OA\Property(property="stock", type="string", example=20),
 *                  @OA\Property(property="image_url", type="string", example="https:\/\/via.placeholder.com\/640x480.png\/00ee55?text=voluptas"),
 *                  @OA\Property(property="category_id", type="integer", example=1),
 *              )),
 *          ),
 *      ),
 *  ),
 *
 * @OA\Get(
 *      path="/api/products/{product}",
 *      summary="Продукт",
 *      tags={"Product"},
 *      @OA\Parameter(
 *          description="Id продукта",
 *          in="path",
 *          name="product",
 *          required=true,
 *          example=1
 *      ),
 *      @OA\Response(
 *          response=200,
 *          description="Ok",
 *          @OA\JsonContent(
 *              @OA\Property(property="data", type="object",
 *                  @OA\Property(property="id", type="integer", example=1),
 *                  @OA\Property(property="name", type="string", example="Some name"),
 *                  @OA\Property(property="description", type="string", example="Some description"),
 *                  @OA\Property(property="price", type="string", example=300),
 *                  @OA\Property(property="stock", type="string", example=20),
 *                  @OA\Property(property="image_url", type="string", example="https:\/\/via.placeholder.com\/640x480.png\/00ee55?text=voluptas"),
 *                  @OA\Property(property="category_id", type="integer", example=1),
 *              ),
 *          ),
 *      ),
 *  ),
 *
 * @OA\Patch(
 *      path="/api/products/{product}",
 *      summary="Создание",
 *      tags={"Product"},
 *
 *      @OA\Parameter(
 *           description="Id продукта",
 *           in="path",
 *           name="product",
 *           required=true,
 *           example=1
 *      ),
 *
 *      @OA\RequestBody(
 *          @OA\MediaType(
 *              mediaType="multipart/form-data",
 *              @OA\Schema(
 *                  @OA\Property(property="name", type="string", example="Some name"),
 *                  @OA\Property(property="description", type="string", example="Some description"),
 *                  @OA\Property(property="price", type="number", example=300),
 *                  @OA\Property(property="stock", type="integer", example=20),
 *                  @OA\Property(property="image_url", type="file", format="jpg", example="test.jpg"),
 *                  @OA\Property(property="category_id", type="integer", example=1),
 *              )
 *          )
 *      ),
 *
 *      @OA\Response(
 *          response=200,
 *          description="Ok",
 *          @OA\JsonContent(
 *              @OA\Property(property="data", type="object",
 *                  @OA\Property(property="name", type="string", example="Some name"),
 *                  @OA\Property(property="description", type="string", example="Some description"),
 *                  @OA\Property(property="price", type="number", example=300),
 *                  @OA\Property(property="stock", type="integer", example=20),
 *                  @OA\Property(property="image_url", type="file", format="jpg", example="images/products/ccS8JvPDfyiePQEuNfSbF5zMJQ6u46cJX0IQ2IB6.png"),
 *                  @OA\Property(property="category_id", type="integer", example=1),
 *              ),
 *          ),
 *      ),
 *   ),
 *
 * @OA\Delete(
 *        path="/api/products/{product}",
 *        summary="Удаление",
 *        tags={"Product"},
 *        @OA\Parameter(
 *            description="Id продукта",
 *            in="path",
 *            name="product",
 *            required=true,
 *            example=1
 *        ),
 *        @OA\Response(
 *            response=200,
 *            description="Ok",
 *            @OA\JsonContent(
 *                @OA\Property(property="message", type="integer", example="done"),
 *            ),
 *        ),
 *    ),
 *
 * @OA\Head(
 *        path="/api/products",
 *        summary="Проверка существования ресурса",
 *        tags={"Product"},
 *
 *        @OA\Response(
 *            response=200,
 *            description="Ok",
 *        ),
 *    ),
 * @OA\Options(
 *         path="/api/products",
 *         summary="Получение доступных методов",
 *         tags={"Product"},
 *
 *         @OA\Response(
 *             response=200,
 *             description="Ok",
 *         ),
 *     ),
 */
class ProductController extends Controller
{

}
