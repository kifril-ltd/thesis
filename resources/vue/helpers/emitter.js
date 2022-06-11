/**
 *   on(event: string, callback: Function, ctx?: any): this;
 *   once(event: string, callback: Function, ctx?: any): this;
 *   emit(event: string, ...args: any[]): this;
 *   off(event: string, callback?: Function): this;
 * @type {{TinyEmitter: TinyEmitter}}
 */
const Emitter = require('tiny-emitter');
const emitter = new Emitter();

export { emitter };
