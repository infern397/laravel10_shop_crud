<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;

/**
 *
 * @OA\Post(
 *     path="/api/orders",
 *     summary="Создание",
 *     tags={"Order"},
 *
 *     @OA\RequestBody(
 *         @OA\JsonContent(
 *             allOf={
 *                 @OA\Schema(
 *                     @OA\Property(property="firstname", type="string", example="Some firstname"),
 *                     @OA\Property(property="lastname", type="string", example="Some lastname"),
 *                     @OA\Property(property="address", type="string", example="Some address"),
 *                     @OA\Property(property="email", type="string", example="user@email.com"),
 *                     @OA\Property(property="password", type="string", example="Some password"),
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
 *                      @OA\Property(property="id", type="integer", example="1"),
 *                      @OA\Property(property="firstname", type="string", example="Some firstname"),
 *                      @OA\Property(property="lastname", type="string", example="Some lastname"),
 *                      @OA\Property(property="address", type="string", example="Some address"),
 *                      @OA\Property(property="email", type="string", example="user@email.com"),
 *             ),
 *         ),
 *     ),
 * ),
 * @OA\Get(
 *      path="/api/orders",
 *      summary="Список",
 *      tags={"Order"},
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
 *      path="/api/orders/{user}",
 *      summary="Заказ",
 *      tags={"Order"},
 *      @OA\Parameter(
 *          description="Id заказа",
 *          in="path",
 *          name="user",
 *          required=true,
 *          example=1
 *      ),
 *      @OA\Response(
 *          response=200,
 *          description="Ok",
 *          @OA\JsonContent(
 *              @OA\Property(property="data", type="object",
 *                  @OA\Property(property="id", type="integer", example="1"),
 *                  @OA\Property(property="firstname", type="string", example="Some firstname"),
 *                  @OA\Property(property="lastname", type="string", example="Some lastname"),
 *                  @OA\Property(property="address", type="string", example="Some address"),
 *                  @OA\Property(property="email", type="string", example="user@email.com"),
 *              ),
 *          ),
 *      ),
 *  ),
 *
 * @OA\Patch(
 *       path="/api/orders/{user}",
 *       summary="Обновление",
 *       tags={"Order"},
 *       @OA\Parameter(
 *           description="Id заказа",
 *           in="path",
 *           name="user",
 *           required=true,
 *           example=1
 *       ),
 *       @OA\RequestBody(
 *          @OA\JsonContent(
 *              allOf={
 *                  @OA\Schema(
 *                      @OA\Property(property="firstname", type="string", example="Some firstname"),
 *                      @OA\Property(property="lastname", type="string", example="Some lastname"),
 *                      @OA\Property(property="address", type="string", example="Some address"),
 *                      @OA\Property(property="email", type="string", example="user@email.com"),
 *                  )
 *              }
 *          )
 *      ),
 *
 *      @OA\Response(
 *          response=200,
 *          description="Ok",
 *          @OA\JsonContent(
 *              @OA\Property(property="data", type="object",
 *                       @OA\Property(property="id", type="integer", example="1"),
 *                       @OA\Property(property="firstname", type="string", example="Some firstname"),
 *                       @OA\Property(property="lastname", type="string", example="Some lastname"),
 *                       @OA\Property(property="address", type="string", example="Some address"),
 *                       @OA\Property(property="email", type="string", example="user@email.com"),
 *              ),
 *          ),
 *      ),
 *   ),
 *
 * @OA\Delete(
 *        path="/api/orders/{user}",
 *        summary="Удаление",
 *        tags={"Order"},
 *        @OA\Parameter(
 *            description="Id заказа",
 *            in="path",
 *            name="user",
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
 *        path="/api/orders",
 *        summary="Проверка существования ресурса",
 *        tags={"Order"},
 *
 *        @OA\Response(
 *            response=200,
 *            description="Ok",
 *        ),
 *    ),
 * @OA\Options(
 *         path="/api/orders",
 *         summary="Получение доступных методов",
 *         tags={"Order"},
 *
 *         @OA\Response(
 *             response=200,
 *             description="Ok",
 *         ),
 *     ),
 */
class OrderController extends Controller
{

}
