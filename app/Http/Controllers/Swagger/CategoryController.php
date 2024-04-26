<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;

/**
 *
 * @OA\Post(
 *     path="/api/categories",
 *     summary="Создание",
 *     tags={"Category"},
 *
 *     @OA\RequestBody(
 *         @OA\JsonContent(
 *             allOf={
 *                 @OA\Schema(
 *                     @OA\Property(property="name", type="string", example="Some name")
 *                 )
 *             }
 *         )
 *     ),
 *
 *     @OA\Response(
 *         response=200,
 *         description="Ok",
 *         @OA\JsonContent(
 *             @OA\Property(property="data", type="object",
 *                 @OA\Property(property="id", type="integer", example=1),
 *                 @OA\Property(property="name", type="string", example="Some name"),
 *             ),
 *         ),
 *     ),
 * ),
 * @OA\Get(
 *      path="/api/categories",
 *      summary="Список",
 *      tags={"Category"},
 *
 *      @OA\Response(
 *          response=200,
 *          description="Ok",
 *          @OA\JsonContent(
 *              @OA\Property(property="data", type="array", @OA\Items(
 *                  @OA\Property(property="id", type="integer", example=1),
 *                  @OA\Property(property="name", type="string", example="Some name"),
 *              )),
 *          ),
 *      ),
 *  ),
 *
 * @OA\Get(
 *      path="/api/categories/{category}",
 *      summary="Категория",
 *      tags={"Category"},
 *      @OA\Parameter(
 *          description="Id категории",
 *          in="path",
 *          name="category",
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
 *              ),
 *          ),
 *      ),
 *  ),
 *
 * @OA\Patch(
 *       path="/api/categories/{category}",
 *       summary="Обновление",
 *       tags={"Category"},
 *       @OA\Parameter(
 *           description="Id категории",
 *           in="path",
 *           name="category",
 *           required=true,
 *           example=1
 *       ),
 *       @OA\RequestBody(
 *          @OA\JsonContent(
 *              allOf={
 *                  @OA\Schema(
 *                      @OA\Property(property="name", type="string", example="Some name for edit")
 *                  )
 *              }
 *          )
 *       ),
 *       @OA\Response(
 *           response=200,
 *           description="Ok",
 *           @OA\JsonContent(
 *               @OA\Property(property="data", type="object",
 *                   @OA\Property(property="id", type="integer", example=1),
 *                   @OA\Property(property="name", type="string", example="Some name"),
 *               ),
 *           ),
 *       ),
 *   ),
 *
 * @OA\Delete(
 *        path="/api/categories/{category}",
 *        summary="Удаление",
 *        tags={"Category"},
 *        @OA\Parameter(
 *            description="Id категории",
 *            in="path",
 *            name="category",
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
 *        path="/api/categories",
 *        summary="Проверка существования ресурса",
 *        tags={"Category"},
 *
 *        @OA\Response(
 *            response=200,
 *            description="Ok",
 *        ),
 *    ),
 * @OA\Options(
 *         path="/api/categories",
 *         summary="Получение доступных методов",
 *         tags={"Category"},
 *
 *         @OA\Response(
 *             response=200,
 *             description="Ok",
 *         ),
 *     ),
 */
class CategoryController extends Controller
{

}
