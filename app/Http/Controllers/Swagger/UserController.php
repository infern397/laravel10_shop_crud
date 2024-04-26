<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;

/**
 *
 * @OA\Post(
 *     path="/api/users",
 *     summary="Создание",
 *     tags={"User"},
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
 *      path="/api/users",
 *      summary="Список",
 *      tags={"User"},
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
 *      path="/api/users/{user}",
 *      summary="Пользователь",
 *      tags={"User"},
 *      @OA\Parameter(
 *          description="Id пользователя",
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
 *       path="/api/users/{user}",
 *       summary="Обновление",
 *       tags={"User"},
 *       @OA\Parameter(
 *           description="Id пользователя",
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
 *        path="/api/users/{user}",
 *        summary="Удаление",
 *        tags={"User"},
 *        @OA\Parameter(
 *            description="Id пользователя",
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
 *        path="/api/users",
 *        summary="Проверка существования ресурса",
 *        tags={"User"},
 *
 *        @OA\Response(
 *            response=200,
 *            description="Ok",
 *        ),
 *    ),
 * @OA\Options(
 *         path="/api/users",
 *         summary="Получение доступных методов",
 *         tags={"User"},
 *
 *         @OA\Response(
 *             response=200,
 *             description="Ok",
 *         ),
 *     ),
 */
class UserController extends Controller
{

}
