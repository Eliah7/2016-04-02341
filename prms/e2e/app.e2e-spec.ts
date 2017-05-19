import { PrmsPage } from './app.po';

describe('prms App', function() {
  let page: PrmsPage;

  beforeEach(() => {
    page = new PrmsPage();
  });

  it('should display message saying app works', () => {
    page.navigateTo();
    expect(page.getParagraphText()).toEqual('app works!');
  });
});
